<!DOCTYPE html>
<html lang="pt-br">

<?php include_once(ROOT."/src/View/layout/head.php");  ?>

<body>

<?php include_once(ROOT."/src/View/components/navbar.php"); ?>

<div class="container d-flex flex-direction-row justify-content-center align-items-center">

    <div class="rounded-3 p-5 mt-4 w-50" style="background-color: var(--primary-color);">

        <div class="d-flex flex-direction-row justify-content-center">
            <h3 class="fs-2 mb-4 mx-2 logo-title">Login</h3>
            <svg width="50" height="50" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M32.4167 6C30.096 6 27.8704 6.92187 26.2295 8.56282C24.5885 10.2038 23.6667 12.4294 23.6667 14.75V55.5833C23.6667 57.904 24.5885 60.1296 26.2295 61.7705C27.8704 63.4115 30.096 64.3333 32.4167 64.3333H49.9167C52.2373 64.3333 54.4629 63.4115 56.1039 61.7705C57.7448 60.1296 58.6667 57.904 58.6667 55.5833V14.75C58.6667 12.4294 57.7448 10.2038 56.1039 8.56282C54.4629 6.92187 52.2373 6 49.9167 6H32.4167ZM36.1879 24.3546C36.7349 23.8078 37.4766 23.5006 38.25 23.5006C39.0234 23.5006 39.7651 23.8078 40.3121 24.3546L49.0621 33.1046C49.6089 33.6515 49.916 34.3933 49.916 35.1667C49.916 35.9401 49.6089 36.6818 49.0621 37.2287L40.3121 45.9787C39.762 46.51 39.0252 46.804 38.2605 46.7974C37.4958 46.7907 36.7642 46.484 36.2234 45.9432C35.6827 45.4024 35.3759 44.6709 35.3693 43.9062C35.3626 43.1414 35.6566 42.4047 36.1879 41.8546L39.9592 38.0833H14.9167C14.1431 38.0833 13.4013 37.776 12.8543 37.2291C12.3073 36.6821 12 35.9402 12 35.1667C12 34.3931 12.3073 33.6513 12.8543 33.1043C13.4013 32.5573 14.1431 32.25 14.9167 32.25H39.9592L36.1879 28.4787C35.6411 27.9318 35.334 27.1901 35.334 26.4167C35.334 25.6433 35.6411 24.9015 36.1879 24.3546Z" fill="#F2E8DF"/>
            </svg>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label title fw-semibold">Informe o CPF</label>
            <input type="text" class="form-control input-primary border-0" id="exampleFormControlInput1" maxlength="11">
        </div>

        <div class="mb-3">
            <label for="inputPassword" class="form-label title fw-semibold">Informe a SENHA</label>
            <input type="password" class="form-control input-primary border-0" id="inputPassword" class="form-control"
                aria-describedby="passwordHelpBlock" style="">
        </div>

        <div class="d-grid gap-4 mx-auto my-5">
            <button type="button" class="btn btn-primary button-primary-system fw-semibold btn-lg border border-0">
                Entrar
                <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.1146 6.11466C22.6147 5.61473 23.2928 5.33389 23.9999 5.33389C24.707 5.33389 25.3852 5.61473 25.8853 6.11466L37.8853 18.1147C38.3852 18.6147 38.666 19.2929 38.666 20C38.666 20.7071 38.3852 21.3853 37.8853 21.8853L25.8853 33.8853C25.3823 34.3711 24.7087 34.6399 24.0095 34.6338C23.3103 34.6277 22.6415 34.3473 22.1471 33.8528C21.6526 33.3584 21.3722 32.6896 21.3661 31.9904C21.36 31.2912 21.6288 30.6176 22.1146 30.1147L29.3333 22.6667H3.99992C3.29267 22.6667 2.6144 22.3857 2.1143 21.8856C1.6142 21.3855 1.33325 20.7072 1.33325 20C1.33325 19.2927 1.6142 18.6145 2.1143 18.1144C2.6144 17.6143 3.29267 17.3333 3.99992 17.3333H29.3333L22.1146 9.88532C21.6147 9.38525 21.3338 8.70709 21.3338 7.99999C21.3338 7.29289 21.6147 6.61473 22.1146 6.11466Z" fill="#F2E8DF" />
                </svg>
            </button>

            <button type="button" class="btn btn-secondary button-primary-system fw-semibold btn-lg border border-0">
                Criar conta
                <svg width="25" height="25" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.4999 20.8333H29.1666V12.5C29.1666 11.3949 28.7276 10.3351 27.9462 9.5537C27.1648 8.7723 26.105 8.33331 24.9999 8.33331C23.8948 8.33331 22.835 8.7723 22.0536 9.5537C21.2722 10.3351 20.8333 11.3949 20.8333 12.5L20.9812 20.8333H12.4999C11.3948 20.8333 10.335 21.2723 9.55364 22.0537C8.77224 22.8351 8.33325 23.8949 8.33325 25C8.33325 26.105 8.77224 27.1649 9.55364 27.9463C10.335 28.7277 11.3948 29.1666 12.4999 29.1666L20.9812 29.0187L20.8333 37.5C20.8333 38.605 21.2722 39.6649 22.0536 40.4463C22.835 41.2277 23.8948 41.6666 24.9999 41.6666C26.105 41.6666 27.1648 41.2277 27.9462 40.4463C28.7276 39.6649 29.1666 38.605 29.1666 37.5V29.0187L37.4999 29.1666C38.605 29.1666 39.6648 28.7277 40.4462 27.9463C41.2276 27.1649 41.6666 26.105 41.6666 25C41.6666 23.8949 41.2276 22.8351 40.4462 22.0537C39.6648 21.2723 38.605 20.8333 37.4999 20.8333Z" fill="#F2E8DF" />
                </svg>
            </button>
        </div>
    </div>
</div>

</body>
</html>