<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserCreatedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $user)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Account Created on '.config('app.name'))
            ->greeting('Hello!')
            ->line('A new account has been created on '.config('app.name').'. by '.$this->user->full_name)
            ->line('Account Details:')
            ->line('Name: '.$notifiable->full_name)
            ->line('Email: '.$notifiable->email)
            ->line('Phone: '.$notifiable->full_phone)
            ->line('Address: '.$notifiable->address)
            ->line('City: '.$notifiable->city)
            ->line('State: '.$notifiable->state)
            ->line('Country: '.$notifiable->country->name)
            ->line('Zip: '.$notifiable->zip)
            ->line('Status: '.($notifiable->status ? 'Active' : 'Inactive'))
            ->line('Role: '.$notifiable->roles->first()->name)
            ->line('You can view the account details by clicking the button below:')
            ->action('View Account', url('/users/'.$notifiable->id))
            ->line('If you did not create this account, please ignore this email.')
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
