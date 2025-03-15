<header class="bg-gradient-to-r from-primary to-secondary text-muted-foreground dark:text-secondary-foreground py-5 shadow-lg sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto flex justify-between items-center px-6">
        <!-- Logo or Site Title -->
        <h1 class="text-3xl font-bold tracking-tight">
            <a class="hover:underline focus:outline-none focus:ring-2 focus:ring-primary-foreground text- " href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    bloginfo( 'name' );
                } ?>
            </a>
        </h1>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6">
        <?php theme_menu(); ?>
        </nav>

        <!-- Theme Toggle Button -->
        <button id="theme-toggle" class="p-2 rounded bg-muted hover:bg-muted-foreground dark:bg-muted dark:hover:bg-muted-foreground transition duration-300 text-primary-foreground">
            🌙 / ☀️
        </button>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const themeToggle = document.getElementById("theme-toggle");
        const root = document.documentElement;
        
        if (localStorage.getItem("theme") === "dark") {
            root.classList.add("dark");
        }
        
        themeToggle.addEventListener("click", () => {
            root.classList.toggle("dark");
            localStorage.setItem("theme", root.classList.contains("dark") ? "dark" : "light");
        });
    });
</script>