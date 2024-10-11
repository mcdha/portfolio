<?php

namespace App\Mail;

use App\Models\GetInTouch;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetInTouchResponse extends Mailable
{
    use Queueable, SerializesModels;

    public $getInTouch;

    public function __construct(GetInTouch $getInTouch)
    {
        $this->getInTouch = $getInTouch;
    }

    public function build()
    {
        $email = $this->view('pages.emails.get_in_touch_response')
                      ->subject('Thank You for Getting in Touch');

        if ($this->getInTouch->image) {
            $imagePath = storage_path('app/public/' . $this->getInTouch->image);
            $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
            $mimeType = $this->getMimeType($imageExtension);

            $email->attach($imagePath, [
                'as' => 'image.' . $imageExtension,
                'mime' => $mimeType,
            ]);
        }

        return $email;
    }

    protected function getMimeType($extension)
    {
        $mimeTypes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            // Add more MIME types as needed
        ];

        return $mimeTypes[$extension] ?? 'application/octet-stream';
    }
}
