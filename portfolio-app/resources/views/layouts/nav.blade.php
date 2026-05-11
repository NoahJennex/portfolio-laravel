<nav id="side-nav">


{{-- Links --}}
    <div id="side-nav-links">
        <a href="{{ url('/#home') }}" >Home</a>
        <a href="{{ url('/#contact') }}" >Contact</a>        
        <a href="{{ url('/#about') }}" >About</a>
        <a href="{{ url('/#resume') }}" >Resume</a>
        <a href="{{ url('/#portfolio-header') }}" >Portfolio</a>

        <div id="side-portfolio-links">
            <a href="{{ url('/#wordpress') }}" >WordPress</a>
            <a href="{{ url('/#laravel') }}" >Laravel</a>
            <a href="{{ url('/#react') }}" >React</a>
            <a href="{{ url('/#figma') }}" >Figma</a>
        </div>


    </div>

</nav>

{{-- JavaScript for active link highlighting --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('#side-nav-links a');
    const sections = document.querySelectorAll('#home, #contact, #about, #resume, #portfolio, #wordpress, #laravel, #react, #figma');
    
    //detects when an element enters or leaves the viewport
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // clear active class from all links
                    navLinks.forEach(link => link.classList.remove('active'));
                    
                    // add active class to the link corresponding to the visible section
                    const id = entry.target.id;
                    const activeLink = document.querySelector(`#side-nav-links a[href*="#${id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });
        },
        { 
        // adds more precision to when the observer triggers
        // Trigger when just 10% visible
        threshold: 0,
        // Detection zone starts above viewport
        rootMargin: '0px 0px -85% 0px'
    }
    );
    // Observe each section
    sections.forEach(section => observer.observe(section));
});
</script>

