<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\DocumentInterface;

use App\Helpers\{
    QueryResultHelper,
    CustomValidationMessageHelper
};

use Exception;

class DocumentService
{
    protected $repository;

    public function __construct(DocumentInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfDocumentType($data)
    {
        try {
            $res = $this->repository->createMfDocumentType($data);
            return QueryResultHelper::successCreate('document type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfDocumentTypes($filters)
    {
        return QueryResultHelper::successGet('Document type', $this->repository->getMfDocumentTypes($filters));
    }

    public function updateMfDocumentType($id, $data)
    {
        try {
            $res = $this->repository->updateMfDocumentType($id, $data);
            return QueryResultHelper::successUpdate('Document type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfDocumentType($id)
    {
        $this->repository->deleteMfDocumentType($id);
        return QueryResultHelper::successDelete('Document type');
    }

    public function importMfDocumentType(array $data)
    {
        $created = [];
        $hasDuplicates = false;

        foreach ($data as $item) {
            if ($this->repository->isDocumentTypeDescExist($item['document_type_desc'])) {
                $hasDuplicates = true;
                continue;
            }

            $created[] = $this->repository->createMfDocumentType($item);
        }

        return CustomValidationMessageHelper::importMessage($created, $hasDuplicates, 'document type');
    }
}