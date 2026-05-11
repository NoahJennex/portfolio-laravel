@extends('layouts.app')

@section('title', 'Portfolio - Noah Jennex')

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
                I am a junior web developer with a passion for creating dynamic and responsive websites. I have experience with JavaScript, PHP, React and Laravel. I am always eager to learn new technologies and improve my skills. In my free time, I enjoy working on personal projects, exploring amature photography, and dabbling in graphic design.
            </p>
        </div>
    </section>

    <section id="resume" class="content-sections fade-in fade-out">
        <h3>Resume</h3>
        <a href="{{ asset('resume.pdf') }}" target="_blank">View My Resume</a>
    </section>

    <section id="portfolio" class="content-sections">
        <h3 id="portfolio-header">Portfolio</h3>
        <div class="underline-large"></div>
        <div id="projects">

            <section id="wordpress" class="project fade-in fade-out">
                <h4>WordPress - Photography Site</h4>
                <h6 class="project-link">github: <a href="https://github.com/NoahJennex/WordPress-Photography">https://github.com/NoahJennex/WordPress-Photography</a></h6>
                <div class="underline-small"></div>
                <iframe class="project-video" src="{{ asset('images/wordpress.mp4') }}" frameborder="0" allowfullscreen></iframe>
                <p>A mock photography portfolio site built with WordPress, featuring a child theme and a custom admin plugin.</p>
                <h6>Functionality:</h6>
                <ul>
                    <li>Custom gallery template — Displays photo albums from a custom 'album' post type</li>
                    <li>ACF integration — Uses Advanced Custom Fields and ACF Galerie 4 for managing album photos</li>
                    <li>Custom font selector plugin — Allows admins to choose and apply Google Fonts site-wide from wp-admin</li>
                </ul>

                <table>
                    <tbody>
                        <tr>
                            <td><strong>WordPress Child Theme</strong></td>
                            <td>Created a GeneratePress child theme with custom page templates and CSS styling</td>
                        </tr>
                        <tr>
                            <td><strong>Custom Post Types</strong></td>
                            <td>Built a gallery template that queries 'album' post type with WP_Query</td>
                        </tr>
                        <tr>
                            <td><strong>Plugin Development</strong></td>
                            <td>Created wp-admin-font-selector plugin from scratch with settings page</td>
                        </tr>
                        <tr>
                            <td><strong>WordPress Settings API</strong></td>
                            <td>register_setting(), add_settings_section(), add_settings_field() for admin forms</td>
                        </tr>
                        <tr>
                            <td><strong>Options API</strong></td>
                            <td>get_option() / update_option() to persist user font preferences in database</td>
                        </tr>
                        <tr>
                            <td><strong>WordPress Hooks</strong></td>
                            <td>admin_menu, admin_init, wp_head, generate_before_main_content, generate_after_main_content</td>
                        </tr>
                        <tr>
                            <td><strong>Security Best Practices</strong></td>
                            <td>ABSPATH direct-access protection, sanitize_key() input validation, allowlist pattern</td>
                        </tr>
                        <tr>
                            <td><strong>Third-Party Plugin Integration</strong></td>
                            <td>Integrated ACF, ACF Galerie 4, Contact Form 7, and Meta Box plugins</td>
                        </tr>
                        <tr>
                            <td><strong>Theme Functions</strong></td>
                            <td>enqueue scripts/styles, template hierarchy, do_action() hooks for extensibility</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="laravel" class="project fade-in fade-out">
                <h4>Laravel - Social Media Site</h4>
                <h6 class="project-link">github: <a href="https://github.com/NoahJennex/social-media-site-laravel">https://github.com/NoahJennex/social-media-site-laravel</a></h6>
                <div class="underline-small"></div>                
                <p>A full-stack social media platform built with Laravel that demonstrates modern PHP web development concepts.</p>
                <h6>Functionality:</h6>
                <ul>
                    <li>User authentication — Register, login, and logout with secure password hashing</li>
                    <li>Chirp posts — Create, edit, update, and delete posts</li>
                    <li>Like system — Users can like/unlike chirps with real-time count updates</li>
                    <li>Comments — Threaded comments on individual chirps</li>
                    <li>Follow system — Follow/unfollow other users to customize your feed</li>
                    <li>Bookmarks — Save chirps for later viewing</li>
                </ul>

                <table>
                    <tbody>
                        <tr>
                            <td><strong>MVC Architecture</strong></td>
                            <td>Clean separation with Models (User, Chirp, Like, Comment), Controllers, and Blade views</td>
                        </tr>
                        <tr>
                            <td><strong>Eloquent ORM</strong></td>
                            <td>Relationships: HasMany, BelongsTo, BelongsToMany (following, followers, bookmarkedChirps)</td>
                        </tr>
                        <tr>
                            <td><strong>Routing</strong></td>
                            <td>Route groups with middleware protection for authenticated routes</td>
                        </tr>
                        <tr>
                            <td><strong>Form Validation</strong></td>
                            <td>Server-side validation with custom error messages (max:255, file types, max:50MB)</td>
                        </tr>
                        <tr>
                            <td><strong>File Storage</strong></td>
                            <td>Laravel's storage facade for handling media uploads to disk</td>
                        </tr>
                        <tr>
                            <td><strong>Blade Templates</strong></td>
                            <td>Reusable components and layout templates for consistent UI</td>
                        </tr>
                        <tr>
                            <td><strong>Database Migrations</strong></td>
                            <td>Schema management for users, chirps, likes, comments, follows, and bookmarks tables</td>
                        </tr>
                        <tr>
                            <td><strong>Authentication</strong></td>
                            <td>Laravel Breeze-style auth with Laravel's built-in authentication features</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="react" class="project fade-in fade-out">
                <h4>React - Tic-Tac-Toe</h4>
                <h6 class="project-link">github: <a href="https://github.com/NoahJennex/tictactoe-game-react">https://github.com/NoahJennex/tictactoe-game-react</a></h6>
                <div class="underline-small"></div>
                <iframe class="project-video" src="{{ asset('images/tictactoe.mp4') }}" frameborder="0" allowfullscreen></iframe>
                <p>A classic Tic-Tac-Toe game built with React that demonstrates fundamental front-end development concepts.</p>
                <h6>Functionality:</h6>
                <ul>
                    <li>Two-player gameplay — Alternating X/O moves on a 3x3 grid</li>
                    <li>Win detection — Automatically detects winner or draw</li>
                    <li>Move history — Click any previous move to jump back and review the game state</li>
                </ul>

                <table>
                    <tbody>
                        <tr>
                            <td><strong>React Components</strong></td>
                            <td>Game, Board, and Square components with clear separation of concerns</td>
                        </tr>
                        <tr>
                            <td><strong>State Management</strong></td>
                            <td>useState hook manages game state (history, currentMove)</td>
                        </tr>
                        <tr>
                            <td><strong>Props & Data Flow</strong></td>
                            <td>Parent-to-child data passing via props (xIsNext, squares, onPlay)</td>
                        </tr>
                        <tr>
                            <td><strong>Immutability</strong></td>
                            <td>Using .slice() to create new arrays instead of mutating existing state</td>
                        </tr>
                        <tr>
                            <td><strong>Conditional Rendering</strong></td>
                            <td>Dynamic status messages for winner/next player</td>
                        </tr>
                        <tr>
                            <td><strong>List Rendering</strong></td>
                            <td>.map() generates the move history buttons</td>
                        </tr>
                        <tr>
                            <td><strong>Event Handling</strong></td>
                            <td>onClick handlers for square clicks and move navigation</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="figma" class="project fade-in fade-out">
                <h4>Figma - Juice Company Website Redesign</h4>
                <h6 class="project-link">figma: <a href="https://www.figma.com/design/9Ezzj9bYJ86l9Iz2pYnWfj/WebDesignAssignment1b?node-id=0-1&p=f&t=uYdP5UT8IlsXiV8X-0">https://www.figma.com/design/9Ezzj9bYJ86l9Iz2pYnWfj/WebDesignAssignment1b</a></h6>
                <div class="underline-small"></div> 
                <img src="{{ asset('images/figma1.png') }}" class="project-image">
                <img src="{{ asset('images/figma2.png') }}" class="project-image">
                <img src="{{ asset('images/figma3.png') }}" class="project-image">
                <p>A UI/UX redesign of an outdated website for a juice company specified for childcare centers.</p>
                <h6>Functionality:</h6>
                <ul>
                    <li>Responsive design — Mobile, tablet, and desktop layouts</li>
                    <li>Design systems — Consistent colors, typography, and spacing</li>
                    <li>Prototyping — Interactive transitions and animations</li>
                </ul>
            </section>
        </div>
    </section>
@endsection