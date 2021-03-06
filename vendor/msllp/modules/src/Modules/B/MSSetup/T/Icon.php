<?php
/**
 * Created by PhpStorm.
 * User: ms
 * Date: 02-10-2019
 * Time: 09:15 PM
 */

return [

    "Master_Icon_1"=>[

        'tableName'=>'MS_ICON_1',
        'connection'=>'MS_UI',
        'fields'=>
            [



                [
                    'name'=>'IconName',
                    'type'=>'string',
                    'input'=>'text',
                    "validation"=>['required'=>true,]
                ],

                [
                    'name'=>'IconType',
                    'type'=>'string',
                    'input'=>'option',
                    "validation"=>['required'=>true,]
                ],

                [
                    'name'=>'IconValue',
                    'type'=>'string',
                    'input'=>'option',
                    "validation"=>['required'=>true,]
                ],

                [
                    'name'=>'Status',
                    'type'=>'string',
                    'input'=>'text',
                    "validation"=>['required'=>true,]
                ],



            ],
        'fieldGroup'=>[],
        'fieldGroupMultiple'=>[],

        'action'=>[],

        'validationMessage'=>[],


        'MSforms'=>[],


        'MSViews'=>[],


    ]
];
