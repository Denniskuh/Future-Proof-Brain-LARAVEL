@extends('layouts.app')

@section('content')
    <section class="contact">
        <div class="c-content bg--neutrals-13 ff--alt">
            @if(Session::has('success'))
                <div class="c-content-succes fc--neutrals-4 ff--alt fs--size-2" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">
                    {{Session::get('success')}}    
                </div>
            @else 
                <div class="c-content-title fc--neutrals-4 ff--alt fs--size-2 p--10" data-aos="fade-up" data-aos-easing="ease-in" data-aos-delay="1500">
                    <h1>Contacteer ons!</h1>
                    <p class="fs--size-1">Ontdek hoe wij je kunnen helpen om de resultaten te bereiken waar jij en/of jouw team naar streeft.</p>
                </div>            
                <div class="c-content-form bg--neutrals-0 p--5" data-aos="zoom-in" data-aos-easing="ease-in" data-aos-delay="1500">    
                    <!-- Error -->
                    @if ($errors->has('email'))
                        <div class="c-content-form-errors fc--neutrals-0 fw--bold fs--size-1 ff--normal bg--error-0">
                            <span>{{ $errors->first('email') }}</span>
                        </div>
                    @endif
                    @if ($errors->has('message'))
                        <div class="c-content-form-errors fc--neutrals-0 fw--bold fs--size-1 ff--normal bg--error-0">
                            <span>{{ $errors->first('message') }}</span>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="post" class="bg--neutrals-0">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf

                        <fieldset>
                            <label for="email" class="fc--neutrals-4">Jouw email<span class="fc--error-0 fs--size-3">*</span></label>
                            <input type="email" id="email" name="email" class="mt--2 fc--neutrals-3 fw--bold fs--size-1 ff--normal bg--neutrals-13 {{ $errors->has('email') ? 'error' : '' }}">
                        </fieldset>
                        <fieldset>
                            <label for="message" class="fc--neutrals-4">Jouw bericht<span class="fc--error-0 fs--size-3">*</span></label>
                            <textarea name="message" id="message" cols="50" rows="20" class="mt--2 fc--neutrals-3 fw--bold fs--size-1 ff--normal bg--neutrals-13 {{ $errors->has('message') ? 'error' : '' }}"></textarea>
                        </fieldset>
                        <fieldset>
                            <input type="submit" class="c-content-form-submit fc--neutrals-0 fw--bold fs--size-1 ff--normal bg--neutrals-4">
                        </fieldset>
                    </form>
                </div>
            @endif
            <div class="c-content-map bg--neutrals-3 fc--neutrals-0 ff--alt fs--size-2">
                <div data-aos="fade-up" data-aos-easing="ease-in" data-aos-delay="500">
                    <h1>Eens langskomen? Dat kan!</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.2681610570426!2d4.496299615760562!3d51.25097177959383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f872b21d8093%3A0x1401b640c976dee4!2sSint-Cordulastraat%201%2C%202900%20Schoten!5e0!3m2!1snl!2sbe!4v1614477241397!5m2!1snl!2sbe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection