<?php

namespace HP\Modules\Products\Delete\Responses\Error;

use HP\Modules\Products\Delete\Presenters\Responses\Error\ResponsePresenter;
use HP\Modules\Products\Delete\Responses\ResponseInterface;
use HP\Modules\Products\Delete\Responses\Status;

class Response implements ResponseInterface
{
    private $status;
    private $error;

    public function __construct(Status $status, string $error)
    {
        $this->status = $status;
        $this->error = $error;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function getPresenter(): ResponsePresenter
    {
        return (new ResponsePresenter($this))->present();
    }
}
