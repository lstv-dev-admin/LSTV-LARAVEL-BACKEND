<?php

namespace App\Http\Controllers\Utilities;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Upload a file
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // 10MB max
            'directory' => 'nullable|string',
        ]);

        $file = $request->file('file');
        $directory = $request->input('directory', 'uploads');
        $path = $file->store($directory, 'public');

        return ResponseHelper::respond([
            'success' => true,
            'message' => 'File uploaded successfully',
            'data' => [
                'path' => $path,
                'url' => Storage::url($path),
                'name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
            ]
        ]);
    }

    /**
     * Get list of files
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $directory = $request->input('directory', 'uploads');
        $files = Storage::disk('public')->files($directory);

        $fileList = collect($files)->map(function ($file) {
            return [
                'path' => $file,
                'url' => Storage::url($file),
                'name' => basename($file),
                'size' => Storage::disk('public')->size($file),
                'last_modified' => Storage::disk('public')->lastModified($file),
            ];
        });

        return ResponseHelper::respond([
            'success' => true,
            'data' => $fileList,
        ]);
    }

    /**
     * Get a specific file
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        $filePath = base64_decode($id);
        
        if (!Storage::disk('public')->exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'File not found',
            ], 404);
        }

        return ResponseHelper::respond([
            'success' => true,
            'data' => [
                'path' => $filePath,
                'url' => Storage::url($filePath),
                'name' => basename($filePath),
                'size' => Storage::disk('public')->size($filePath),
                'last_modified' => Storage::disk('public')->lastModified($filePath),
            ]
        ]);
    }

    /**
     * Update a file (rename or move)
     *
     * @param string $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(string $id, Request $request)
    {
        $request->validate([
            'new_name' => 'nullable|string',
            'new_directory' => 'nullable|string',
        ]);

        $filePath = base64_decode($id);
        
        if (!Storage::disk('public')->exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'File not found',
            ], 404);
        }

        $newName = $request->input('new_name');
        $newDirectory = $request->input('new_directory');
        $directory = dirname($filePath);
        $fileName = $newName ?? basename($filePath);
        $targetDirectory = $newDirectory ?? $directory;
        $newPath = $targetDirectory . '/' . $fileName;

        if ($filePath !== $newPath) {
            Storage::disk('public')->move($filePath, $newPath);
        }

        return ResponseHelper::respond([
            'success' => true,
            'message' => 'File updated successfully',
            'data' => [
                'path' => $newPath,
                'url' => Storage::url($newPath),
                'name' => basename($newPath),
            ]
        ]);
    }

    /**
     * Delete a file
     *
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(string $id)
    {
        $filePath = base64_decode($id);
        
        if (!Storage::disk('public')->exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'File not found',
            ], 404);
        }

        Storage::disk('public')->delete($filePath);

        return ResponseHelper::respond([
            'success' => true,
            'message' => 'File deleted successfully',
        ]);
    }
}

