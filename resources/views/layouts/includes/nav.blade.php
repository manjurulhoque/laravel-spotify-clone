<div id="navBarContainer">
    <nav class="navBar">

		<span role="link" tabindex="0" class="logo">
			<img src="{{ asset('images/logo.jpg') }}">
		</span>


        <div class="group">

            <div class="navItem">
				<span role='link' tabindex='0' class="navItemLink">
					Search
					<img src="{{ asset('images/icons/search.png') }}" class="icon" alt="Search">
				</span>
            </div>

        </div>

        <div class="group">
            <div class="navItem">
                <a href="/home" tabindex="0" class="navItemLink">Browse</a>
            </div>

            <div class="navItem">
                <span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
            </div>

            <div class="navItem">
                <a href="{{ route('profile.settings') }}" class="navItemLink">{{ auth()->user()->full_name }}</a>
            </div>
        </div>

    </nav>
</div>