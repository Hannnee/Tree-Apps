<?php

namespace App\Http\Controllers\Feature\Tree;

use App\Services\Tree\TreeService;
use App\Http\Controllers\Controller;

class TreeController extends Controller
{
    protected $treeService;

    public function __construct(TreeService $treeService)
    {
        $this->treeService = $treeService;
    }

    public function visual()
    {
        return $this->tryCatch(function () {
            $members = $this->treeService->generateFamilyTree();
            return view('feature.tree.index', compact('members'));
        });
    }
}
