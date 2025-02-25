<?php

declare(strict_types=1);

namespace App\Components\NewsRubrics\BusinessLayer;

use App\Common\Interfaces\DeleteRecordInterface;
use App\Components\NewsRubrics\Models\NewsRubric;
use Exception;

class DeleteNewsRubric implements DeleteRecordInterface
{
    /**
     * @throws Exception
     */
    public function one(int $id): void
    {
        $newsRubric = NewsRubric::find($id);

        if (!($newsRubric instanceof NewsRubric)) {
            throw new Exception("Ошибка удаления. Рубрика с id $id не найдена. ");
        }

        $newsRubric->delete();
    }
}
