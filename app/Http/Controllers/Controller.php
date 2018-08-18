<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="http://hnl5.dev.br/",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Hacker News Laravel 5 API",
*          description="Documentação criada usando o Swagger.",
 *         @SWG\Contact(name="Saulo Gomes", url="https://github.com/saulobr88")
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     ),
 *    @SWG\Definition(
 *         definition="Timestamps",
 *         @SWG\Property(
 *             property="created_at",
 *             type="string",
 *             format="date-time",
 *              description="Creation date",
 *              example="2017-07-21 00:00:00"
 *         ),
 *         @SWG\Property(
 *              property="updated_at",
 *              type="string",
 *              format="date-time",
 *              description="Last updated",
 *              example="2017-07-21 00:00:00"
 *         )
 *    )
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
