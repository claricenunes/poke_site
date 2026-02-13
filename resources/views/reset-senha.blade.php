@include('auth.reset-password')

try {
    Mail::to($user->email)->send(new ResetPasswordMail($token));
    dd("Email enviado!");
} catch (\Exception $e) {
    dd($e->getMessage());
}
