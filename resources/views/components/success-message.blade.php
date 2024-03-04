@if(session('success'))
    <div id="success-message" class="alert alert-success fixed top-20 right-10 z-10 px-6 py-4 rounded-lg text-white bg-green-400">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            var message = document.getElementById('success-message');
            var opacity = 1;
            var intervalId = setInterval(function() {
                if (opacity > 0) {
                    opacity -= 0.05;
                    message.style.opacity = opacity;
                } else {
                    clearInterval(intervalId);
                    message.style.display = 'none';
                }
            }, 50);
        }, 3000);
    </script>
@endif
