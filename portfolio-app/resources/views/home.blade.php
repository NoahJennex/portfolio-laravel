@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section id="home" class="content-sections fade-in fade-out">
        <div id="name" class="title-divs">
            <h1>Noah</h1>
            <h1>Jennex</h1>
        </div>
        <div id="title" class="title-divs fade-in fade-out">
            <h3>Junior</h3>
            <h2>Web Developer</h2>
        </div>
    </section>

    <section id="contact-about-sec" class="content-sections">
        <div id="contact" class="fade-in fade-out">
            <h5>Contact:</h5>
            <p>Email: <a href="mailto:noahjennex@gmail.com">noahjennex@gmail.com</a></p>
            <p>Phone: <a href="tel:(902) 809-1503">(902) 809-1503</a></p>
            <p>Github: <a href="https://github.com/noahjennex" target="_blank">https://github.com/noahjennex</a></p>
        </div>
        <div id="about" class="fade-in fade-out">
            <h3>About Me</h3>
            <p>
                I am a junior web developer with a passion for creating dynamic and responsive websites. I have experience with HTML, CSS, JavaScript, and Laravel. I am always eager to learn new technologies and improve my skills.
            </p>
        </div>
    </section>

@endsection