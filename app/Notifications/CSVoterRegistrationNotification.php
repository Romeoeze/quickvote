<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;



class CSVoterRegistrationNotification extends Notification implements ShouldQueue
{
    use Queueable;
 private $csvoter_details;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($csvoter_details)
    {
        $this->csvoter_details = $csvoter_details;
    }
    public $tries = 15;
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello, '.$this->csvoter_details['name'] )
                    ->subject('Voter\'s Credentials')
                    ->line('You are invited to participate in the upcoming elections.')
                     ->line(new HtmlString('Title: '.'<strong>' .$this->csvoter_details['contest_name'] .'</strong>'))
                     ->line(new HtmlString('Start Date & Time: '.'<strong>' .$this->csvoter_details['start'] .'</strong>'))
                     ->line(new HtmlString('End Date & Time: '.'<strong>' .$this->csvoter_details['end'] .'</strong>'))
                     ->line(new HtmlString('<em>'.'Find Your voters credentails below'.'</em>'))
                    ->line(new HtmlString('ACCREDITATED EMAIL: '.'<strong>' .$this->csvoter_details['email'] .'</strong>'))
                    ->line(new HtmlString('12 DIGIT VOTER\'S PIN: '.'<strong>' .$this->csvoter_details['passcode'] .'</strong>'))
                     ->action('follow this link to vote', $this->csvoter_details['url'])
                     ->line(new HtmlString('<em>'.'Voting must be casted between the stipulated Start - End DateTime'.'</em>')) 
                    ->line('Thank you for using our application');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
