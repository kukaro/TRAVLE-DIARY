<?php

namespace App\Http\Requests\RestRequests;

class PictureRestRequest extends RestRequest
{
    private int $id;
    private int $owner_id;
    private string $location;
    private string $path;
    private string $created_date;
    private string $updated_date;

    /**
     * Class constructor.
     */
    public function __construct()
    {
    }

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function rules(){
        return [

        ];
    }
}
