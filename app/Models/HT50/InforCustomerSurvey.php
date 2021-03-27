<?php

namespace App\Models\HT50;

use Illuminate\Database\Eloquent\Model;

class InforCustomerSurvey extends Model
{
    protected $fillable=[
        'code','name_gara','name','birthday','email','phone','name_sale','phone_sale','name_accountant','phone_accountant','address','province','city','status','create_by','modify_by'
    ];
    protected $fillable_store = [
        'code','name_gara','name','birthday','email','phone','name_sale','phone_sale','name_accountant','phone_accountant','address','province','city'
    ];
    protected $fillable_update = [

    ];

    protected $table = "ht50_information_customer_surveys";
}
