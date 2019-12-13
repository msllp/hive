<?php
namespace MS\Mod\B\Accounts\L;

class Ledger
{


public static function getTotalRevenue(){

    $m=\MS\Mod\B\Accounts\F::getIncomeModel();
    $out=number_format(0,2);
    if(count($m->rowGet())>0){
        $data=collect($m->rowGet());
        $out=number_format($data->sum('IncomeTotalAmount'),2);
    }


    return (string)$out;

}
    public static function getTotalExpense(){

        $m=\MS\Mod\B\Accounts\F::getExpenseModel();
        $out=number_format(0,2);
        if(count($m->rowGet())>0){
            $data=collect($m->rowGet());
            $out=number_format($data->sum('ExpenseTotalAmount'),2);
        }


        return (string)$out;

    }

}
