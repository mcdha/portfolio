<div class="email-container" style="font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; background-color: #f4f4f4; border-radius: 8px;">
    <h2 style="color: #333;">Hello <span style="font-weight: bolder; color: #2c3e50;">{{ $getInTouch->name }}</span>,</h2>

    <div style="background-color: #ffffff; border-radius: 5px; padding: 15px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <p><strong>Your Email:</strong> <span style="color: #2980b9;">{{ $getInTouch->email }}</span></p>
        <p><strong>Your Occupation:</strong> {{ $getInTouch->occupation }}</p>
        <p><strong>Your Message:</strong></p>
        <blockquote style="background: #f9f9f9; border-left: 5px solid #2980b9; padding: 10px; margin: 10px 0;">
            {{ $getInTouch->message }}
        </blockquote>
        @if($getInTouch->image)
        <p><strong>Your Image:</strong></p>
        <img src="cid:image.{{ pathinfo($getInTouch->image, PATHINFO_EXTENSION) }}" alt="Uploaded Image" style="max-width: 10%; height: 10%; border-radius: 1rem; margin-bottom: 10px;">
        @else
            <p><strong>Your Image:</strong> No image uploaded.</p>
        @endif
    
    </div>

    <p style="margin-top: 20px;">Thank you for getting in touch with me. I appreciate your interest.</p>

    <h3 style="color: #333;">Here are my rates for your reference:</h3>
    <ul style="list-style-type: none; padding-left: 0;">
        <li style="background-color: #ffffff; border: 1px solid #ddd; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
            <strong>Static website or system:</strong> <span style="color: #27ae60;">$300</span>
        </li>
        <li style="background-color: #ffffff; border: 1px solid #ddd; border-radius: 5px; padding: 10px;">
            <strong>Dynamic website or system:</strong> <span style="color: #27ae60;">$400</span>
        </li>
    </ul>

    <p>These rates include free minimal changes and updating functions and content.</p>

    <p>If you have any questions or would like to proceed, please don't hesitate to reply to this email.</p>

    <p style="margin-top: 20px;">Best regards,<br>Mc.Dharnel</p>

    <div style="margin-top: 20px; text-align: center; font-size: 12px; color: #777;">
        <p>&copy; 2024 Mc.Dharnel. All rights reserved.</p>
    </div>
</div>
