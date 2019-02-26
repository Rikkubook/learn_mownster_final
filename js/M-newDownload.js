let downloadBtn = document.getElementById('download');
        downloadBtn.addEventListener('click', download);


        function download(e){
            e.preventDefault();

            let xhr = new XMLHttpRequest();

            xhr.onload = function(){
                console.log(xhr.responseText);
                downloadBtn.href = xhr.responseText;
                downloadBtn.setAttribute('download','mownster');
                downloadBtn.click();
                downloadBtn.removeEventListener('click', download);

                setTimeout(() => {
                    downloadBtn.addEventListener('click', download);
                }, 500);
            }

            let url = 'M-download.php';
            xhr.open('GET', url, true);
            xhr.send();
        }