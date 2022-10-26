window.addEventListener('DOMContentLoaded', (event) => {
    
    // Hover script
    const playVideo_blocs = document.querySelectorAll(".playVideo_bloc");
    const htmlVideoPlayers = document.querySelectorAll(".playVideo_bloc_video");
    let targetVideoRef = "0";
    let isPlaying = false;

    // Quand on survole la video
    playVideo_blocs.forEach(playVideo_bloc => {

        // Quand le cusor survole à l'interieur de la video (pc)
        playVideo_bloc.addEventListener("mouseover", () => {
            if (isPlaying) {
                return;
            }
            targetVideoRef = playVideo_bloc.dataset.ref;
            miniPlayerUI('loading', targetVideoRef);
        })

        // Quand il click sur la video (mobile)
        playVideo_bloc.addEventListener("pointerdown", () => {
            if (isPlaying && targetVideoRef == playVideo_bloc.dataset.ref ) {
                return;
            }
            if (targetVideoRef != playVideo_bloc.dataset.ref ) {
                miniPlayerUI('thumb', targetVideoRef);
            }
            
            targetVideoRef = playVideo_bloc.dataset.ref;
            miniPlayerUI('loading', targetVideoRef);
        })

        //  Quand le cusor survole à l'extérieur de la video (pc)
        playVideo_bloc.addEventListener("mouseleave", () => {
            isPlaying = false;
            miniPlayerUI('thumb', targetVideoRef);
            targetVideoRef = '0';
        })
    });

     // Evenement sur chaque lecteur de musique
     htmlVideoPlayers.forEach(htmlVideoPlayer => {
        // Quand le cusor entre
        htmlVideoPlayer.addEventListener("loadedmetadata", () => {
             miniPlayerUI('playing', targetVideoRef);
        })
    });

    // Gestioon de l'UI du lecteur de musique
    function miniPlayerUI(statut= 'thumb',target) {
        let currentMiniPlayer = document.querySelector(".playVideo_bloc[data-ref='"+target+"'] .playVideo_bloc_video");
        let currentThumb = document.querySelector(".playVideo_bloc[data-ref='"+target+"'] .playVideo_bloc_thumbnail");
        let currentLoading = document.querySelector(".playVideo_bloc[data-ref='"+target+"'] .playVideo_bloc_load");

        // Initialisation
        try {
            currentThumb.style.opacity = 0;
            currentLoading.style.opacity = 0;
            currentMiniPlayer.style.opacity = 0;
    
            switch (statut) {
                case 'thumb':
                    currentThumb.style.opacity=1;
                    currentMiniPlayer.pause();
                    isPlaying = false;
                break;
                case 'loading':
                    currentThumb.style.opacity = 1;
                    currentLoading.style.opacity= .8;
                    currentMiniPlayer.setAttribute("src", currentMiniPlayer.dataset.src);
                    currentMiniPlayer.load();
                    isPlaying = false;
                break;
                case 'playing':
                    currentMiniPlayer.style.opacity=1;
                    currentMiniPlayer.play();
                    isPlaying = true;
                break;
            }   
        } catch (error) {
            
        }
    }
});
