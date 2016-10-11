<?php
/*
 * Обертка для работы с Ajax-запросами
*/


/**
 * @property mixed json
 */
class AjaxRequest
{
    public $actions = [];
    public $data;
    public $code;
    public $message;
    public $status;

    public function __construct($request)
    {
        $this->request = $request;
        $this->action = $this->getRequestParam("act");

        if(!empty($this->actions[$this->action])) {
            $this->callback = $this->actions[$this->action];
            call_user_func(
                [
                    $this,
                    $this->callback
                ]
            );
        }
        else {
            header("HTTP/1.1 400 Bad Request");
            $this->setFieldError("main", "Некорректный запрос");
        }

        $this->response = $this->renderToString();
    }

    public function getRequestParam($name)
    {
        if(array_key_exists($name, $this->request)) {
            return trim($this->request[$name]);
        }

        return null;
    }

    public function setFieldError($name, $message = "")
    {
        $this->status = "err";
        $this->code = $name;
        $this->message = $message;
    }

    public function renderToString()
    {
        $this->json = [
            "status" => $this->status,
            "code" => $this->code,
            "message" => $this->message,
            "data" => $this->data,
        ];

        return json_encode($this->json, ENT_NOQUOTES);
    }

    public function setResponse($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function showResponse()
    {
        header("Content-Type: application/json; charset=UTF-8");
        echo $this->response;
    }
}
