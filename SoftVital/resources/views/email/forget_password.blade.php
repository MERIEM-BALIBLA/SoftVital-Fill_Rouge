<section style="max-width: 32rem; padding: 1.5rem 2rem; margin: 0 auto; background-color: #ffffff; border-radius: 0.75rem; box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);">
    <header>
        <a href="#">
            <img style="width: auto; height: 1.75rem; margin-bottom: 1rem;" src="https://merakiui.com/images/full-logo.svg" alt="">
        </a>
    </header>

    <main style="margin-top: 2rem;">
        <h2 style="color: #374151; font-size: 1.5rem; font-weight: 600;">Hello {{ $userName }}</h2>

        <p style="margin-top: 1rem; line-height: 1.5; color: #6b7280;">Alicia has invited you to join the team on <span style="font-weight: 600;">Meraki UI</span>.</p>
        
        <a href="{{ route('new_pass', $token) }}" style="display: inline-block; padding: 0.75rem 1.5rem; margin-top: 2rem; font-size: 0.875rem; font-weight: 500; text-transform: uppercase; color: #ffffff; background-color: #3b82f6; border-radius: 0.375rem; transition: background-color 0.3s ease-in-out; text-decoration: none;">Reset password</a>
        
        <p style="margin-top: 2rem; line-height: 1.5; color: #6b7280;">Thanks,<br>Meraki UI team</p>
    </main>

    <footer style="margin-top: 2rem;">
        <p style="color: #9ca3af;">This email was sent to <a href="#" style="color: #3b82f6; text-decoration: underline;">contact@merakiui.com</a>. If you'd rather not receive this kind of email, you can <a href="#" style="color: #3b82f6; text-decoration: underline;">unsubscribe</a> or <a href="#" style="color: #3b82f6; text-decoration: underline;">manage your email preferences</a>.</p>

        <p style="margin-top: 0.5rem; color: #9ca3af;">© Meraki UI. All Rights Reserved.</p>
    </footer>
</section>
