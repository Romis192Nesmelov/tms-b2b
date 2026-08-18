<div class="{{ isset($class) ? $class : '' }} user-fields-block bg-gray-800 pt-5 pb-4 sm:pb-4">
    <div class="w-full mb-3">
        @include('partials.form.input-form',[
            'name' => 'name',
            'class' => 'w-full',
            'placeholder' => __('User name'),
            'with_error' => true
        ])
    </div>
    <div class="w-full mb-3">
        @include('partials.form.input-form',[
            'name' => 'email',
            'class' => 'w-full',
            'placeholder' => 'E-mail',
            'with_error' => true
        ])
    </div>
    <div class="w-full mb-3">
        @include('partials.form.input-form',[
            'name' => 'phone',
            'class' => 'w-full',
            'placeholder' => '+7(___)___-__-__',
            'with_error' => true
        ])
    </div>
    <textarea name="text" minlength="3" maxlength="300" class="w-full bg-gray-600 text-white px-3 py-1 rounded-md" rows="4" placeholder="{{ __('Your message') }}"></textarea>
    @include('partials.form.input-form-error', ['name' => 'text'])
</div>