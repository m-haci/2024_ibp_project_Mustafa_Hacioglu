<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mustafa Hacıoğlu') }}
        </h2>
    </x-slot>

    <main class="mt-6">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #000000 !important;
                color: #ffffff;
                /* Sayfa kenar boşluğunu kaldırır */

            }

            .grid {
                display: flex;
                flex-wrap: wrap;
                gap: 30px;
                margin: 20px;
            }

            .content {
                width: calc(50% - 15px);
                /* Yarı genişlikte kartlar olacak ve aralarında 30 piksel boşluk olacak */
            }

            .card {
                background: rgba(218, 100, 100, 0.8);
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
                text-align: center;
                margin-bottom: 30px;
                /* Kartların altında 30 piksel boşluk bırak */
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            }

            .card img {
                width: 80px;
                height: 80px;
                margin-bottom: 15px;
                transition: transform 0.3s;
            }

            .card:hover img {
                transform: scale(1.15);
            }

            .card h2 {
                font-size: 1.5rem;
                margin-bottom: 10px;
                color: #2c3e50;
            }

            .card p {
                font-size: 1rem;
                color: #34495e;
            }

            .nav {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 20px;
                right: 20px;
            }

            .nav a {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s;
            }

            .nav a:hover {
                transform: scale(1.1);
            }

            .message-box {
                position: absolute;
                bottom: 20px;
                right: 20px;
                background: rgba(255, 255, 255, 0.9);
                width: 350px;
                max-height: 500px;
                overflow-y: auto;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            }

            .message-box .message {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .draggable {
                cursor: pointer;
                width: 60px;
                height: 60px;
                background: #ddd;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .draggable:hover {
                transform: scale(1.1);
            }

            html,
            body {
                background-color: #fff;
                color: #2a85b3;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links>a {
                color: #faf8f8;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <div class="grid">
            <div class="content">
                <div class="title m-b-md">
                    Admin User Yönetimi
                </div>
                <div class="links">
                    <a href="{{ route('admin.users.index') }}">Burayı kullanarak user ekleme,silme,editleme işleme
                        yapabilirsiniz.</a>
                </div>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    Admin Post Yönetimi
                </div>
                <div class="links">
                    <a href="{{ route('admin.posts.index') }}">Burayı kullanarak post ekleme,silme,editleme işleme
                        yapabilirsiniz.</a>
                </div>
            </div>

            <div class="content">
                <div class="title m-s-m">
                    Admin Envanter Yönetimi
                </div>
                <div class="links">
                    <a href="{{ route('admin.product.index') }}">Burayı kullanarak eşya ekleme,silme,editleme işleme
                        yapabilirsiniz.</a>
                </div>
            </div>
            <div class="content">
                <div class="title m-s-m">
                    Admin Panel Yönetimi Hakkında
                </div>
                <div class="links">
                    <a
                        href="https://www.mediaclick.com.tr/blog/cms-nedir-yonetim-paneli-nedir#:~:text=baz%C4%B1%20bilgiler%20verece%C4%9Fiz.-,Y%C3%B6netim%20Paneline%20(Admin%20Paneli)%20Genel%20Bak%C4%B1%C5%9F,Y%C3%B6netim%20Sistemi%20olarak%20da%20bilinir.">SayfSayfaya
                        Yönlendir=>></a>
                </div>
            </div>
        </div>


        <div class="message-box">
            <div class="message">
                <p><strong>Kullanıcı123:</strong> Merhaba, admin!</p>
            </div>
            <div class="message">
                <p><strong>Admin:</strong> Merhaba, nasıl yardımcı olabilirim?</p>
            </div>
            <form class="response-form mt-4" method="POST">
                @csrf
                <textarea name="reply" rows="3" class="w-full border rounded-md p-2"></textarea>
                <button type="submit"
                    class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Admin Olarak Cevapla</button>
            </form>
        </div>

        <div class="nav">
            <div id="draggable-message-box" class="draggable">
                <div class="main-icon-without-slide icon-png-container pd-lv4

    " data-type="img" data-png="https://cdn-icons-png.flaticon.com/512/1827/1827392.png" data-id="1827392" data-premium="">


    <img src="   https://cdn-icons-png.flaticon.com/512/1827/1827392.png " width="56" height="56" alt="" title="" class="img-small">




</div>
            </div>
        </div>

        <script>
            const draggableMessageBox = document.getElementById('draggable-message-box');
            const messageBox = document.querySelector('.message-box');

            draggableMessageBox.addEventListener('click', () => {
                messageBox.style.display = messageBox.style.display === 'block' ? 'none' : 'block';
            });

            draggableMessageBox.addEventListener('mousedown', (e) => {
                let shiftX = e.clientX - draggableMessageBox.getBoundingClientRect().left;
                let shiftY = e.clientY - draggableMessageBox.getBoundingClientRect().top;

                function moveAt(pageX, pageY) {
                    draggableMessageBox.style.left = pageX - shiftX + 'px';
                    draggableMessageBox.style.top = pageY - shiftY + 'px';
                }

                function onMouseMove(e) {
                    moveAt(e.pageX, e.pageY);
                }

                document.addEventListener('mousemove', onMouseMove);

                draggableMessageBox.onmouseup = function() {
                    document.removeEventListener('mousemove', onMouseMove);
                    draggableMessageBox.onmouseup = null;
                };
            });

            draggableMessageBox.ondragstart = function() {
                return false;
            };
        </script>
    </main>
</x-app-layout>
