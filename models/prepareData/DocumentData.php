<?php

namespace app\models\prepareData;

use app\models\Document;

class DocumentData
{
    public function statistics()
    {
        $prevYear = strtotime('-1 year', time());
        $prevMonth = strtotime('-1 month', time());
        $prevDay = strtotime('-1 day', time());

        $lastYear = ['>=', 'created_at', date('Y-m-d', $prevYear)];
        $lastMonth = ['>=', 'created_at', date('Y-m-d', $prevMonth)];
        $lastDay = ['>=', 'created_at', date('Y-m-d', $prevDay)];

        $permissionPrivate = ['permission_id' => Document::PERMISSION_PRIVATE];
        $permissionSemiPrivate = ['permission_id' => Document::PERMISSION_SEMI_PRIVATE];
        $permissionPublic = ['permission_id' => Document::PERMISSION_PUBLIC];

        return [
            'lastYearAll' => Document::find()->where($lastYear)->count(),
            'lastYearPrivate' => Document::find()->where($lastYear)->andWhere($permissionPrivate)->count(),
            'lastYearSemiPrivate' => Document::find()->where($lastYear)->andWhere($permissionSemiPrivate)->count(),
            'lastYearPublic' => Document::find()->where($lastYear)->andWhere($permissionPublic)->count(),

            'lastMonthAll' => Document::find()->where($lastMonth)->count(),
            'lastMonthPrivate' => Document::find()->where($lastMonth)->andWhere($permissionPrivate)->count(),
            'lastMonthSemiPrivate' => Document::find()->where($lastMonth)->andWhere($permissionSemiPrivate)->count(),
            'lastMonthPublic' => Document::find()->where($lastMonth)->andWhere($permissionPublic)->count(),

            'lastDayAll' => Document::find()->where($lastDay)->count(),
            'lastDayPrivate' => Document::find()->where($lastDay)->andWhere($permissionPrivate)->count(),
            'lastDaySemiPrivate' => Document::find()->where($lastDay)->andWhere($permissionSemiPrivate)->count(),
            'lastDayPublic' => Document::find()->where($lastDay)->andWhere($permissionPublic)->count(),
        ];
    }
}
