var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('video', {
            events: {
                'onReady': onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        event.target.playVideo();
    }

 // Dapatkan elemen audio dan tombol
 const audio = document.getElementById('myAudio');
 const audioControlButton = document.getElementById('audioControl');

 // Inisialisasi status pemutaran
 let isPlaying = true;

 // Fungsi untuk mengontrol pemutaran audio
 function toggleAudio() {
   if (isPlaying) {
     audio.pause();
     audioControlButton.textContent = 'Play Audio';
   } else {
     audio.play();
     audioControlButton.textContent = 'Stop Audio';
   }
   isPlaying = !isPlaying;
 }

 // Tambahkan event listener ke tombol untuk mengontrol audio
 audioControlButton.addEventListener('click', toggleAudio);