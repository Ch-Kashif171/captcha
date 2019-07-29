# Captcha

Captcha is a simple easy to use package for Laravel.

# Getting Started
  installing Captcha Composer Package
Note: If you do not have Composer yet, you can install it by following the instructions on https://getcomposer.org

# Step 1. Install package
  
    composer require kashif/captcha

# Step 2. Register the Captcha service provider
  in config/app.php
  add following line
   ```php
    Kashif\Captcha\CaptchaServiceProvider::class,
   ```
# Using Captcha:
  In Controller include and call captcha facade and send variable to view and print this variable in view as below
  ```php
    use Kashif\Captcha\Captcha;
    $captcha = Captcha::render();
    return view('view',compact('captcha'));
    
    {!! $captcha !!}

  ```
  If you want to use a helper function to create the captcha use below function.
  ```php
    captcha();
  ```
  Also a directive is available to render captcha in balde view, for this we just need to add below directive into the blade.
  ```php
    @captcha
  ```
  # Verify Captcha:
  
  To verify captcha text you need to call verify facade in controller and pass the text entered by user and it will return ture or false.
  
   ```php
     Captcha::verify("captcha text");
     
   ```
   A helper function is also available to verify the captcha
   
   ```php
      captcha_verify("captcha text");
   ```
