<?php

namespace App\Traits;

use App\Helpers\AlertHelper;
use Illuminate\Support\Facades\DB;

trait TryCatchTraits
{
    public function tryCatch(callable $callback, $message = null, $responseType = 'view')
    {
        DB::beginTransaction();
        try {
            if(!(($message == '') || ($message == null))) {
                AlertHelper::soft('success', $message);
            }
            return $callback();
        } catch (\Exception $e) {
            DB::rollBack();
            if ($responseType === 'json') {
                return response()->json([
                    'message' => 'Terjadi kesalahan '.$e->getMessage()
                ], 500);
            }
            AlertHelper::soft('danger', 'Terjadi kesalahan '.$e->getMessage());
            return back();
        } finally {
            DB::commit();
        }
    }
}

