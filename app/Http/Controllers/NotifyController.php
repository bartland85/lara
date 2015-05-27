<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 27.05.15
 * Time: 21:17
 */

namespace App\Http\Controllers;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;


class NotifyController extends Controller{

    public function index()
    {


// Create a Notifier (or null if no notifier supported)
        $notifier = NotifierFactory::create();

        if ($notifier) {
            // Create your notification
            $notification =
                (new Notification())
                    ->setTitle('Notification title')
                    ->setBody('This is the body of your notification')
                    ->setIcon(__DIR__.'/path/to/your/icon.png')
            ;

            // Send it
            sleep(5);
            $notifier->send($notification);
        }
    }

} 