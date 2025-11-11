<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\DocumentInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Documents\{
    MfDocumentType,
};

class DocumentRepository implements DocumentInterface
{
    public function createMfDocumentType($data)
    {
        $data['document_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfDocumentType::getMasterfileCode());
        return MfDocumentType::create($data);
    }

    public function getMfDocumentTypes($filters)
    {
        $searchableColumns = ['document_type_desc'];
        return PaginationHelper::render(MfDocumentType::class, $filters, $searchableColumns);
    }

    public function updateMfDocumentType($id, $data)
    {
        MfDocumentType::findOrFail($id)->update($data);
        return MfDocumentType::findOrFail($id);
    }

    public function deleteMfDocumentType($id)
    {
        return MfDocumentType::findOrFail($id)->delete();
    }
    
    public function isDocumentTypeDescExist($desc)
    {
        return MfDocumentType::where('document_type_desc', $desc)->exists();
    }
}