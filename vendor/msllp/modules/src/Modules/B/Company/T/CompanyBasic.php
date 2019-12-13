<?php
return [


    "Company_Master"=>[

    'tableName'=>'Company_Master',
    'connection'=>'AC',
    'fields'=>[

        [
            'name'=>'UniqId',
            'vName'=>\Lang::get('Company.id'),
            'type'=>'string',
            'input'=>'auto',
            "validation"=>['required'=>true,]
        ],

        [
            'name'=>'CompanyName',
            'vName'=>\Lang::get('Company.name'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],

        [
            'name'=>'CompanyShortName',
            'vName'=>\Lang::get('Company.shortname'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyType',
            'vName'=>\Lang::get('Company.type'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyAddress1',
            'vName'=>\Lang::get('Company.ad1'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyAddress2',
            'vName'=>\Lang::get('Company.ad2'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyAddress3',
            'vName'=>\Lang::get('Company.ad3'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyCity',
            'vName'=>\Lang::get('Company.city'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyState',
            'vName'=>\Lang::get('Company.state'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyPincode',
            'vName'=>\Lang::get('Company.pincode'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],

        [
            'name'=>'CompanyContactNo',
            'vName'=>\Lang::get('Company.con'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyEmail',
            'vName'=>\Lang::get('Company.email'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],

        [
            'name'=>'CompanyGST',
            'vName'=>\Lang::get('Company.gst'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyPANTAN',
            'vName'=>\Lang::get('Company.pan'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],
        [
            'name'=>'CompanyCIN',
            'vName'=>\Lang::get('Company.cin'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],

        ,
        [
            'name'=>'CompanyHasBranch',
            'vName'=>\Lang::get('Company.cin'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],

        [
            'name'=>'CompanyRoleAccess',
            'vName'=>\Lang::get('Company.role'),
            'type'=>'string',
            'input'=>'text',
            "validation"=>['required'=>true,]
        ],



    ],
    'fieldGroup'=>[
    'Company Basic Details'=>['CompanyName','CompanyShortName',],
    'Legal Details'=>['CompanyType','CompanyEmail','CompanyGST','CompanyPANTAN','CompanyCIN',],
    'Address Details'=>['CompanyAddress1','CompanyAddress2','CompanyAddress3','CompanyCity','CompanyState','CompanyPincode',],
    'Contact Details'=>['CompanyContactNo','CompanyEmail',]
    ],
    'fieldGroupMultiple'=>[

    ],
    'action'=>[




    ],
    'validationMessage'=>[
    ],
    'MSforms'=>[

    ],
    'MSViews'=>[


    ],
],


    ];
