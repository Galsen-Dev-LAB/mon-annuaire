<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cet annuaire téléphonique est un petit projet réalisé par les membres de Galsen Dev.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <title>Galsen Annuaire | <?= $params['title'] ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Global CSS styles -->
    <link rel="stylesheet" href ="/styles/main.css" />
    <!-- Page related CSS styles -->
    <?php if (isset($params['style'])): ?>
        <link rel="stylesheet" href ="/styles/<?= $params['style']?>" />
    <?php endif; ?>
</head>
<body>
    <nav class="nav">
        <a href="/" class="nav__logo">
            <img src="/img/logo.svg" alt="Logo">
        </a>
        <div class="nav__links">
            <a href="/add" class="nav__links__add">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 3C10.2652 3 10.5196 3.10536 10.7071 3.29289C10.8946 3.48043 11 3.73478 11 4V9H16C16.2652 9 16.5196 9.10536 16.7071 9.29289C16.8946 9.48043 17 9.73478 17 10C17 10.2652 16.8946 10.5196 16.7071 10.7071C16.5196 10.8946 16.2652 11 16 11H11V16C11 16.2652 10.8946 16.5196 10.7071 16.7071C10.5196 16.8946 10.2652 17 10 17C9.73478 17 9.48043 16.8946 9.29289 16.7071C9.10536 16.5196 9 16.2652 9 16V11H4C3.73478 11 3.48043 10.8946 3.29289 10.7071C3.10536 10.5196 3 10.2652 3 10C3 9.73478 3.10536 9.48043 3.29289 9.29289C3.48043 9.10536 3.73478 9 4 9H9V4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3V3Z" fill="#94A1B2"/>
                </svg>
                <span>Ajouter un contact</span>
            </a>

            <a class="nav__links__contribute" title="Contribuer" href="https://github.com/Galsen-Dev-LAB/mon-annuaire" target="_blank">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.68952 15.811C6.68952 15.8892 6.59677 15.9517 6.47984 15.9517C6.34677 15.9634 6.25403 15.9009 6.25403 15.811C6.25403 15.7329 6.34677 15.6704 6.46371 15.6704C6.58468 15.6587 6.68952 15.7212 6.68952 15.811ZM5.43548 15.6353C5.40726 15.7134 5.4879 15.8032 5.60887 15.8267C5.71371 15.8657 5.83468 15.8267 5.85887 15.7485C5.88306 15.6704 5.80645 15.5806 5.68548 15.5454C5.58064 15.5181 5.46371 15.5571 5.43548 15.6353ZM7.21774 15.5688C7.10081 15.5962 7.02016 15.6704 7.03226 15.7603C7.04435 15.8384 7.14919 15.8892 7.27016 15.8618C7.3871 15.8345 7.46774 15.7603 7.45564 15.6821C7.44355 15.6079 7.33468 15.5571 7.21774 15.5688ZM9.87097 0.600098C4.27823 0.600098 0 4.71338 0 10.1313C0 14.4634 2.81452 18.1704 6.83468 19.4751C7.35081 19.5649 7.53226 19.2563 7.53226 19.0024C7.53226 18.7603 7.52016 17.4243 7.52016 16.604C7.52016 16.604 4.69758 17.1899 4.10484 15.4399C4.10484 15.4399 3.64516 14.3032 2.98387 14.0103C2.98387 14.0103 2.06048 13.397 3.04839 13.4087C3.04839 13.4087 4.05242 13.4868 4.60484 14.4165C5.4879 15.9243 6.96774 15.4907 7.54435 15.2329C7.6371 14.6079 7.89919 14.1743 8.18952 13.9165C5.93548 13.6743 3.66129 13.3579 3.66129 9.6001C3.66129 8.52588 3.96774 7.98682 4.6129 7.29932C4.50806 7.04541 4.16532 5.99854 4.71774 4.64697C5.56048 4.39307 7.5 5.70166 7.5 5.70166C8.30645 5.48291 9.17339 5.36963 10.0323 5.36963C10.8911 5.36963 11.7581 5.48291 12.5645 5.70166C12.5645 5.70166 14.504 4.38916 15.3468 4.64697C15.8992 6.00244 15.5565 7.04541 15.4516 7.29932C16.0968 7.99072 16.4919 8.52978 16.4919 9.6001C16.4919 13.3696 14.1169 13.6704 11.8629 13.9165C12.2339 14.2251 12.5484 14.811 12.5484 15.729C12.5484 17.0454 12.5363 18.6743 12.5363 18.9946C12.5363 19.2485 12.7218 19.5571 13.2339 19.4673C17.2661 18.1704 20 14.4634 20 10.1313C20 4.71338 15.4637 0.600098 9.87097 0.600098ZM3.91935 14.0728C3.86694 14.1118 3.87903 14.2017 3.94758 14.2759C4.0121 14.3384 4.10484 14.3657 4.15726 14.3149C4.20968 14.2759 4.19758 14.186 4.12903 14.1118C4.06452 14.0493 3.97177 14.022 3.91935 14.0728ZM3.48387 13.7563C3.45565 13.8071 3.49597 13.8696 3.57661 13.9087C3.64113 13.9478 3.72177 13.936 3.75 13.8813C3.77823 13.8306 3.7379 13.7681 3.65726 13.729C3.57661 13.7056 3.5121 13.7173 3.48387 13.7563ZM4.79032 15.147C4.72581 15.1978 4.75 15.3149 4.84274 15.3892C4.93548 15.479 5.05242 15.4907 5.10484 15.4282C5.15726 15.3774 5.13306 15.2603 5.05242 15.186C4.96371 15.0962 4.84274 15.0845 4.79032 15.147ZM4.33065 14.5728C4.26613 14.6118 4.26613 14.7134 4.33065 14.8032C4.39516 14.8931 4.50403 14.9321 4.55645 14.8931C4.62097 14.8423 4.62097 14.7407 4.55645 14.6509C4.5 14.561 4.39516 14.522 4.33065 14.5728Z" fill="#94A1B2"/>
                </svg>
            </a>
        </div>
    </nav>
    <main class="container">
        <?= $content ?>
    </main>
   <footer class="footer">
       <div class="footer__logo">
           <img src="/img/logo.svg" alt="Logo">
       </div>
       <div class="footer__copy">
           <p>Copyright, <a href="https://galsendev.com/" target="_blank">Galsen Dev</a> - 2021</p>
       </div>
   </footer>
</body>
</html>
