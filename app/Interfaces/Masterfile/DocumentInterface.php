<?php

namespace App\Interfaces\Masterfile;

interface DocumentInterface
{
    public function createMfDocumentType($data);
    public function getMfDocumentTypes($filters);
    public function updateMfDocumentType($id, $data);
    public function deleteMfDocumentType($id);
    public function isDocumentTypeDescExist($desc);
}