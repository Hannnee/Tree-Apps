<?php

namespace App\Services\Tree;

use App\Models\Keluarga;
use App\Services\Service;

class TreeService extends Service
{
    function generateFamilyTree($parentId = null, $level = 0)
    {
        $tree    = [];
        $members = Keluarga::where('orang_tua', $parentId)->get();
        foreach ($members as $member) {
            $tree[] = [
                'name'          => $member->nama,
                'jenis_kelamin' => $member->jenis_kelamin,
                'children'      => $this->generateFamilyTree($member->id, $level + 1),
            ];
        }
        return $tree;
    }
}
