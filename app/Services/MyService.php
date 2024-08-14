<?php

namespace App\Services;

class MyService
{
    protected $serviceId;

    public function __construct($serviceId) // No named parameter
    {
        $this->serviceId = $serviceId;
    }

    public function pay()
    {
        return [
            'name' => 'Deepanshu',
            'Service_id' => $this->serviceId,
        ];
    }
}
