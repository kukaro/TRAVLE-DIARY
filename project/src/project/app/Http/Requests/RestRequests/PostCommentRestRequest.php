<?php

namespace App\Http\Requests\RestRequests;

class PostCommentRestRequest extends RestRequest
{
    private ?int $id;
    private ?int $owner_id;
    private ?int $post_id;
    private ?string $contents;
    private ?int $parents_comment_id;
    private ?string $created_date;
    private ?string $updated_date;

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
