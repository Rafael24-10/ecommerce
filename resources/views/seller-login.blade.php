<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="HhP9SBvdSlOj4AdjvFYPHgzN0nwpPR9LzTcyyAHN">

    <title>Sign up</title>
    <script src="/auth/build/assets/scripts.js"></script>
    <link rel="stylesheet" href="/auth/build/assets/styles.css">

    <style>
        .auth-component-button:focus {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(9 9 11 / var(--tw-ring-opacity));
        }

        .auth-component-input {
            color:
        }

        .auth-component-input:focus,
        .auth-component-code-input:focus {
            --tw-ring-color: rgb(33 41 54 / var(--tw-ring-opacity));
            border-color: rgb(33 41 54 / var(--tw-border-opacity));
        }

        .auth-component-input-label-focused {
            color: #212936
        }
    </style>

    <link rel="stylesheet" href="/auth/app.css">

    <link href="http://localhost:8000/auth/img/favicon.png" rel="icon" media="(prefers-color-scheme: light)">
    <link href="http://localhost:8000/auth/img/favicon-dark.png" rel="icon" media="(prefers-color-scheme: dark)">
    <!-- Livewire Styles -->
    <style>
        [wire\:loading][wire\:loading],
        [wire\:loading\.delay][wire\:loading\.delay],
        [wire\:loading\.inline-block][wire\:loading\.inline-block],
        [wire\:loading\.inline][wire\:loading\.inline],
        [wire\:loading\.block][wire\:loading\.block],
        [wire\:loading\.flex][wire\:loading\.flex],
        [wire\:loading\.table][wire\:loading\.table],
        [wire\:loading\.grid][wire\:loading\.grid],
        [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.none][wire\:loading\.delay\.none],
        [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short][wire\:loading\.delay\.short],
        [wire\:loading\.delay\.default][wire\:loading\.delay\.default],
        [wire\:loading\.delay\.long][wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline][wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        :root {
            --livewire-progress-bar-color: #2299dd;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
    <style>
        /* Make clicks pass-through */

        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: var(--livewire-progress-bar-color, #29d);

            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;

            width: 100%;
            height: 2px;
        }

        /* Fancy blur effect */
        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px var(--livewire-progress-bar-color, #29d), 0 0 5px var(--livewire-progress-bar-color, #29d);
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        /* Remove these to get rid of the spinner */
        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;

            border: solid 2px transparent;
            border-top-color: var(--livewire-progress-bar-color, #29d);
            border-left-color: var(--livewire-progress-bar-color, #29d);
            border-radius: 50%;

            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>

<body id="auth-body" class="overflow-hidden relative w-screen h-screen" style="background-color:#ffffff">
    <div x-data="" data-auth="auth-register" class="relative w-full h-full">


        <main id="auth-main-content"
            class="flex relative z-30 flex-col justify-center w-screen min-h-screen items-stretch sm:items-center sm:py-10">
            <div wire:snapshot="{&quot;data&quot;:{&quot;name&quot;:null,&quot;email&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;,&quot;showNameField&quot;:true,&quot;showEmailField&quot;:true,&quot;showPasswordField&quot;:true,&quot;showPasswordConfirmationField&quot;:true,&quot;appearance&quot;:[{&quot;logo&quot;:[{&quot;type&quot;:&quot;svg&quot;,&quot;image_src&quot;:&quot;&quot;,&quot;svg_string&quot;:&quot;<svg class=\&quot;w-full h-full fill-current text-zinc-900\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot; viewBox=\&quot;0 0 27 26\&quot; fill=\&quot;none\&quot;><g fill=\&quot;currentColor\&quot;><path d=\&quot;M21.44 13.101c1.096 1.049 2.456.121 2.425-1.647a3.281 3.281 0 0 0-.632-1.877c-.381-.498-.866-.769-1.33-.742-1.568.088-1.875 2.92-.463 4.266ZM25.394 15.28c.18-.926 0-1.535-.06-1.736-.177-.52-.458-.646-.573-.677-1.098-.296-2.012 2.68-1.208 3.93.544.845 1.541.022 1.841-1.517ZM22.908 5.964c-.898.21-.015 3.049 1.152 3.707.747.42 1.1-.36.713-1.574a4.657 4.657 0 0 0-.832-1.524c-.38-.443-.767-.672-1.033-.61ZM18.106 8.951c1.307.922 2.77.171 2.557-1.317-.1-.599-.4-1.146-.854-1.551-.204-.173-.825-.701-1.591-.589-1.392.204-1.695 2.34-.112 3.457ZM20.646 13.375c-.16-.198-.496-.609-1.121-.708-1.756-.277-3.05 2.048-2.005 3.606 1.01 1.506 3.14.857 3.507-1.073a2.364 2.364 0 0 0-.381-1.825ZM26.39 11.739a6.3 6.3 0 0 0-.326-1.6c-.064-.16-.257-.652-.477-.625-.561.069-.254 3.43.357 3.907.334.26.541-.525.447-1.682ZM20.653 3.576c-.727-.529-1.109-.518-1.3-.416-.72.38.278 2.447 1.632 2.866.826.255 1.171-.347.711-1.239a3.806 3.806 0 0 0-1.043-1.211ZM22.666 18.762c.341-.8.18-1.31.12-1.501a.926.926 0 0 0-.433-.49c-1.146-.554-2.794 1.534-2.316 2.938.425 1.255 2.02.483 2.63-.947ZM17.048 9.424a2.18 2.18 0 0 0-1.457-.646c-1.87-.066-2.829 2.127-1.527 3.503 1.25 1.326 3.48.593 3.614-1.19.064-.898-.463-1.477-.63-1.667ZM24.445 6.423c.219.056-.007-.487-.483-1.16a8.943 8.943 0 0 0-.894-1.075c-.313-.316-.555-.496-.616-.458-.234.145 1.574 2.586 1.993 2.693ZM25.553 16.917c-.407-.169-1.694 2.433-1.514 3.06.1.343.695-.326 1.158-1.302.202-.405.348-.835.432-1.28.055-.366-.024-.456-.076-.478ZM14.379 5.122c1.05.8 2.521.285 2.379-.83-.07-.558-.509-.927-.652-1.048-.35-.285-.8-.422-1.25-.38-1.078.125-1.533 1.451-.477 2.258ZM16.942 18.76a1.528 1.528 0 0 0-.316-1.407 1.636 1.636 0 0 0-.89-.518c-1.6-.358-2.92 1.29-2.076 2.591.823 1.269 2.877.851 3.282-.666ZM21.407 3.384c.23 0 .095-.343-.477-.848a6.935 6.935 0 0 0-1.072-.763c-.407-.236-.72-.359-.777-.307-.136.127 1.732 1.923 2.326 1.918ZM23.02 20.302c-.5-.408-2.265 1.518-2.147 2.341.068.477 1.05-.158 1.684-.961.443-.557.514-.907.542-1.04.011-.073.026-.253-.08-.34ZM17.17 1.38c-.713-.38-1.003-.285-1.112-.19-.45.381.367 1.551 1.4 1.727.64.108.898-.278.542-.81-.256-.382-.69-.64-.83-.726ZM18.907 21.827c.326-.578.173-.932.107-1.084a.86.86 0 0 0-.222-.255c-.911-.66-2.641.643-2.373 1.788.264 1.13 1.858.672 2.488-.45ZM11.761 12.828c-1.602-.229-2.628 1.659-1.615 2.968a1.778 1.778 0 0 0 3.204-.843c.115-.808-.322-1.334-.487-1.535a1.91 1.91 0 0 0-1.101-.59ZM10.643 8.147c.897 1.034 2.76.451 2.93-.917a1.527 1.527 0 0 0-.434-1.248 1.585 1.585 0 0 0-.932-.449c-1.433-.165-2.47 1.569-1.565 2.614ZM17.502 24.629c-.041.452.988.02 1.623-.586.35-.332.393-.53.414-.626a.252.252 0 0 0-.03-.156c-.309-.46-1.943.648-2.007 1.368ZM17.085.861c.41.19.669.25.75.217.115-.047-.09-.24-.467-.437a5.857 5.857 0 0 0-.917-.374c-.087-.028-.527-.164-.593-.128.02.063.857.546 1.227.722ZM6.92 11.684c.67.945 2.292.551 2.522-.924a1.628 1.628 0 0 0-.301-1.263 1.27 1.27 0 0 0-.815-.458c-1.28-.162-2.186 1.543-1.405 2.645ZM11.755 20.47c-1.08-.136-1.652.897-.955 1.726.697.83 2.01.582 2.124-.405.06-.506-.248-.829-.363-.953a1.48 1.48 0 0 0-.806-.368ZM11.826 2.226c.398.469 1.543.264 1.635-.443a.665.665 0 0 0-.224-.572.805.805 0 0 0-.441-.19c-.737-.078-1.38.722-.97 1.205ZM15.243 24.198a.58.58 0 0 0-.047-.654.686.686 0 0 0-.277-.19c-.764-.298-1.675.362-1.416 1.021.259.66 1.382.548 1.74-.177ZM14.453.764c.35.041.606-.113.409-.381a1.097 1.097 0 0 0-.418-.293c-.397-.155-.562-.085-.626-.03-.209.187.065.635.635.704ZM8.414 4.58c.258.698 1.623.476 2.005-.533.114-.299.096-.59-.044-.802a.584.584 0 0 0-.234-.198c-.782-.369-2.022.734-1.727 1.532ZM9.364 18.503a1.618 1.618 0 0 0-.468-1.108c-.124-.115-.5-.466-1.05-.437-1.027.051-1.28 1.402-.415 2.224.819.773 1.937.379 1.933-.679ZM14.796 25.899c-.032.236.62.013.941-.19.26-.167.28-.278.287-.325a.156.156 0 0 0-.014-.056c-.153-.272-1.165.204-1.214.571ZM5.643 14.597a1.757 1.757 0 0 0-.302-1.072c-.096-.118-.316-.393-.676-.414-.886-.05-1.232 1.476-.513 2.268.6.667 1.451.217 1.491-.782ZM4.852 7.708c.264.628 1.322.331 1.695-.673.177-.477.065-.762.023-.872a.532.532 0 0 0-.261-.258c-.733-.31-1.792 1.005-1.457 1.803ZM11.988.274a.358.358 0 0 0 .133-.2.056.056 0 0 0-.016-.039c-.118-.107-.941.202-.95.434-.007.187.514.098.833-.195ZM10.407 24.062a1.169 1.169 0 0 0-.405-.504c-.309-.222-.597-.25-.75-.207-.442.125-.161.77.47 1.076.542.265.818.017.685-.365ZM12.653 25.426a.707.707 0 0 0-.458-.117c-.286.033-.328.252-.095.452.286.246.763.255.738-.055a.42.42 0 0 0-.185-.28ZM9.156 1.683c.181-.2.203-.311.213-.359a.103.103 0 0 0-.032-.095c-.242-.199-1.35.54-1.316.878.028.267.697.06 1.135-.424ZM6.877 21.384a1.686 1.686 0 0 0-.437-.608c-.44-.36-.705-.293-.799-.247-.451.223.058 1.233.757 1.502.462.177.689-.131.478-.647ZM2.982 10.527c.066-.258.06-.529-.019-.783-.082-.218-.212-.27-.286-.286-.536-.095-1.02 1.224-.654 1.783.255.39.784.1.96-.714ZM5.497 4.03a1.12 1.12 0 0 0 .246-.484c0-.04.008-.11-.037-.143-.254-.19-1.218.762-1.146 1.13.052.259.567-.02.937-.503ZM3.006 17.376c-.169-.213-.35-.317-.486-.28-.409.114-.149 1.189.376 1.555.37.258.54-.11.437-.587a1.764 1.764 0 0 0-.327-.688ZM2.192 6.964c.062-.122.108-.253.134-.388.006-.043.017-.136-.03-.15-.173-.053-.669.822-.598 1.048.05.157.32-.156.494-.514v.004ZM.722 13.682c-.023-.061-.084-.224-.164-.214-.22.03-.176 1.09.054 1.275.135.109.217-.222.198-.58a1.784 1.784 0 0 0-.088-.481Z\&quot;\/><\/g><\/svg>&quot;,&quot;height&quot;:&quot;32&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;background&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;,&quot;image&quot;:&quot;&quot;,&quot;image_overlay_color&quot;:&quot;#000000&quot;,&quot;image_overlay_opacity&quot;:&quot;0.5&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;color&quot;:[{&quot;text&quot;:&quot;#212936&quot;,&quot;button&quot;:&quot;#09090b&quot;,&quot;button_text&quot;:&quot;#ffffff&quot;,&quot;input_text&quot;:&quot;&quot;,&quot;input_border&quot;:&quot;#212936&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;alignment&quot;:[{&quot;heading&quot;:&quot;center&quot;,&quot;container&quot;:&quot;center&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;favicon&quot;:[{&quot;light&quot;:&quot;\/auth\/img\/favicon.png&quot;,&quot;dark&quot;:&quot;\/auth\/img\/favicon-dark.png&quot;},{&quot;s&quot;:&quot;std&quot;}]},{&quot;s&quot;:&quot;std&quot;}],&quot;language&quot;:[{&quot;login&quot;:[{&quot;page_title&quot;:&quot;Sign in&quot;,&quot;headline&quot;:&quot;Sign in&quot;,&quot;subheadline&quot;:&quot;Login to your account below&quot;,&quot;show_subheadline&quot;:false,&quot;email_address&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;edit&quot;:&quot;Edit&quot;,&quot;button&quot;:&quot;Continue&quot;,&quot;forget_password&quot;:&quot;Forget your password?&quot;,&quot;dont_have_an_account&quot;:&quot;Don't have an account?&quot;,&quot;sign_up&quot;:&quot;Sign up&quot;,&quot;social_auth_authenticated_message&quot;:&quot;You have been authenticated via __social_providers_list__. Please login to that network below.&quot;,&quot;change_email&quot;:&quot;Change Email&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;register&quot;:[{&quot;page_title&quot;:&quot;Sign up&quot;,&quot;headline&quot;:&quot;Sign up&quot;,&quot;subheadline&quot;:&quot;Register for your free account below.&quot;,&quot;show_subheadline&quot;:false,&quot;name&quot;:&quot;Name&quot;,&quot;email_address&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;password_confirmation&quot;:&quot;Confirm Password&quot;,&quot;already_have_an_account&quot;:&quot;Already have an account?&quot;,&quot;sign_in&quot;:&quot;Sign in&quot;,&quot;button&quot;:&quot;Continue&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;verify&quot;:[{&quot;page_title&quot;:&quot;Verify Your Account&quot;,&quot;headline&quot;:&quot;Verify your email address&quot;,&quot;subheadline&quot;:&quot;Before you can proceed you must verify your email.&quot;,&quot;show_subheadline&quot;:false,&quot;description&quot;:&quot;Before proceeding, please check your email for a verification link. If you did not receive the email,&quot;,&quot;new_request_link&quot;:&quot;click here to request another&quot;,&quot;new_link_sent&quot;:&quot;A new link has been sent to your email address.&quot;,&quot;or&quot;:&quot;Or&quot;,&quot;logout&quot;:&quot;click here to logout&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordConfirm&quot;:[{&quot;page_title&quot;:&quot;Confirm Your Password&quot;,&quot;headline&quot;:&quot;Confirm Password&quot;,&quot;subheadline&quot;:&quot;Be sure to confirm your password below&quot;,&quot;show_subheadline&quot;:false,&quot;password&quot;:&quot;Password&quot;,&quot;button&quot;:&quot;Confirm password&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordResetRequest&quot;:[{&quot;page_title&quot;:&quot;Request a Password Reset&quot;,&quot;headline&quot;:&quot;Reset password&quot;,&quot;subheadline&quot;:&quot;Enter your email below to reset your password&quot;,&quot;show_subheadline&quot;:false,&quot;email&quot;:&quot;Email Address&quot;,&quot;button&quot;:&quot;Send password reset link&quot;,&quot;or&quot;:&quot;or&quot;,&quot;return_to_login&quot;:&quot;return to login&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;passwordReset&quot;:[{&quot;page_title&quot;:&quot;Reset Your Password&quot;,&quot;headline&quot;:&quot;Reset Password&quot;,&quot;subheadline&quot;:&quot;Reset your password below&quot;,&quot;show_subheadline&quot;:false,&quot;email&quot;:&quot;Email Address&quot;,&quot;password&quot;:&quot;Password&quot;,&quot;password_confirm&quot;:&quot;Confirm Password&quot;,&quot;button&quot;:&quot;Reset Password&quot;},{&quot;s&quot;:&quot;std&quot;}],&quot;twoFactorChallenge&quot;:[{&quot;page_title&quot;:&quot;Two Factor Challenge&quot;,&quot;headline_auth&quot;:&quot;Authentication Code&quot;,&quot;subheadline_auth&quot;:&quot;Enter the authentication code provided by your authenticator application.&quot;,&quot;show_subheadline_auth&quot;:false,&quot;headline_recovery&quot;:&quot;Recovery Code&quot;,&quot;subheadline_recovery&quot;:&quot;Please confirm access to your account by entering one of your emergency recovery codes.&quot;,&quot;show_subheadline_recovery&quot;:false},{&quot;s&quot;:&quot;std&quot;}]},{&quot;s&quot;:&quot;std&quot;}],&quot;settings&quot;:[{&quot;redirect_after_auth&quot;:&quot;\/dashboard&quot;,&quot;registration_show_password_same_screen&quot;:true,&quot;registration_include_name_field&quot;:true,&quot;registration_include_password_confirmation_field&quot;:true,&quot;registration_require_email_verification&quot;:false,&quot;enable_branding&quot;:true,&quot;dev_mode&quot;:false,&quot;enable_2fa&quot;:false,&quot;login_show_social_providers&quot;:true,&quot;center_align_social_provider_button_content&quot;:false,&quot;social_providers_location&quot;:&quot;bottom&quot;},{&quot;s&quot;:&quot;std&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;prj1pB4i0vh62SWlyDDW&quot;,&quot;name&quot;:&quot;volt-anonymous-fragment-eyJuYW1lIjoiYXV0aC5yZWdpc3RlciIsInBhdGgiOiJ2ZW5kb3JcL2RldmRvam9cL2F1dGhcL3Jlc291cmNlc1wvdmlld3NcL3BhZ2VzXC9hdXRoXC9yZWdpc3Rlci5ibGFkZS5waHAifQ==&quot;,&quot;path&quot;:&quot;auth\/register&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;824a28d530468ba80d92fd3231161503dacac3d77a6bfc23d467f29d89e2b1aa&quot;}"
                wire:effects="[]" wire:id="prj1pB4i0vh62SWlyDDW" id="auth-container-parent"
                class="relative w-full sm:max-w-md sm:mx-auto">
                <div id="auth-container"
                    class="flex relative top-0 z-20 flex-col justify-center items-stretch px-10 py-8 w-full h-screen bg-white border-gray-200 sm:top-auto sm:h-full sm:border sm:rounded-xl">
                    <div class="flex flex-col sm:mx-auto sm:w-full mb-5 sm:max-w-md items-center"
                        id="auth-heading-container" style="color:#212936">
                        <div class="flex flex-col w-full items-center">
                            <a href="/" style="height:32px; width:auto; display:block" aria-label="Laravel Logo"
                                wire:navigate="">
                                <!--[if BLOCK]><![endif]--> <svg style="height:100%; width:auto"
                                    class="w-full h-full fill-current text-zinc-900" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 27 26" fill="none">
                                    <g fill="currentColor">
                                        <path
                                            d="M21.44 13.101c1.096 1.049 2.456.121 2.425-1.647a3.281 3.281 0 0 0-.632-1.877c-.381-.498-.866-.769-1.33-.742-1.568.088-1.875 2.92-.463 4.266ZM25.394 15.28c.18-.926 0-1.535-.06-1.736-.177-.52-.458-.646-.573-.677-1.098-.296-2.012 2.68-1.208 3.93.544.845 1.541.022 1.841-1.517ZM22.908 5.964c-.898.21-.015 3.049 1.152 3.707.747.42 1.1-.36.713-1.574a4.657 4.657 0 0 0-.832-1.524c-.38-.443-.767-.672-1.033-.61ZM18.106 8.951c1.307.922 2.77.171 2.557-1.317-.1-.599-.4-1.146-.854-1.551-.204-.173-.825-.701-1.591-.589-1.392.204-1.695 2.34-.112 3.457ZM20.646 13.375c-.16-.198-.496-.609-1.121-.708-1.756-.277-3.05 2.048-2.005 3.606 1.01 1.506 3.14.857 3.507-1.073a2.364 2.364 0 0 0-.381-1.825ZM26.39 11.739a6.3 6.3 0 0 0-.326-1.6c-.064-.16-.257-.652-.477-.625-.561.069-.254 3.43.357 3.907.334.26.541-.525.447-1.682ZM20.653 3.576c-.727-.529-1.109-.518-1.3-.416-.72.38.278 2.447 1.632 2.866.826.255 1.171-.347.711-1.239a3.806 3.806 0 0 0-1.043-1.211ZM22.666 18.762c.341-.8.18-1.31.12-1.501a.926.926 0 0 0-.433-.49c-1.146-.554-2.794 1.534-2.316 2.938.425 1.255 2.02.483 2.63-.947ZM17.048 9.424a2.18 2.18 0 0 0-1.457-.646c-1.87-.066-2.829 2.127-1.527 3.503 1.25 1.326 3.48.593 3.614-1.19.064-.898-.463-1.477-.63-1.667ZM24.445 6.423c.219.056-.007-.487-.483-1.16a8.943 8.943 0 0 0-.894-1.075c-.313-.316-.555-.496-.616-.458-.234.145 1.574 2.586 1.993 2.693ZM25.553 16.917c-.407-.169-1.694 2.433-1.514 3.06.1.343.695-.326 1.158-1.302.202-.405.348-.835.432-1.28.055-.366-.024-.456-.076-.478ZM14.379 5.122c1.05.8 2.521.285 2.379-.83-.07-.558-.509-.927-.652-1.048-.35-.285-.8-.422-1.25-.38-1.078.125-1.533 1.451-.477 2.258ZM16.942 18.76a1.528 1.528 0 0 0-.316-1.407 1.636 1.636 0 0 0-.89-.518c-1.6-.358-2.92 1.29-2.076 2.591.823 1.269 2.877.851 3.282-.666ZM21.407 3.384c.23 0 .095-.343-.477-.848a6.935 6.935 0 0 0-1.072-.763c-.407-.236-.72-.359-.777-.307-.136.127 1.732 1.923 2.326 1.918ZM23.02 20.302c-.5-.408-2.265 1.518-2.147 2.341.068.477 1.05-.158 1.684-.961.443-.557.514-.907.542-1.04.011-.073.026-.253-.08-.34ZM17.17 1.38c-.713-.38-1.003-.285-1.112-.19-.45.381.367 1.551 1.4 1.727.64.108.898-.278.542-.81-.256-.382-.69-.64-.83-.726ZM18.907 21.827c.326-.578.173-.932.107-1.084a.86.86 0 0 0-.222-.255c-.911-.66-2.641.643-2.373 1.788.264 1.13 1.858.672 2.488-.45ZM11.761 12.828c-1.602-.229-2.628 1.659-1.615 2.968a1.778 1.778 0 0 0 3.204-.843c.115-.808-.322-1.334-.487-1.535a1.91 1.91 0 0 0-1.101-.59ZM10.643 8.147c.897 1.034 2.76.451 2.93-.917a1.527 1.527 0 0 0-.434-1.248 1.585 1.585 0 0 0-.932-.449c-1.433-.165-2.47 1.569-1.565 2.614ZM17.502 24.629c-.041.452.988.02 1.623-.586.35-.332.393-.53.414-.626a.252.252 0 0 0-.03-.156c-.309-.46-1.943.648-2.007 1.368ZM17.085.861c.41.19.669.25.75.217.115-.047-.09-.24-.467-.437a5.857 5.857 0 0 0-.917-.374c-.087-.028-.527-.164-.593-.128.02.063.857.546 1.227.722ZM6.92 11.684c.67.945 2.292.551 2.522-.924a1.628 1.628 0 0 0-.301-1.263 1.27 1.27 0 0 0-.815-.458c-1.28-.162-2.186 1.543-1.405 2.645ZM11.755 20.47c-1.08-.136-1.652.897-.955 1.726.697.83 2.01.582 2.124-.405.06-.506-.248-.829-.363-.953a1.48 1.48 0 0 0-.806-.368ZM11.826 2.226c.398.469 1.543.264 1.635-.443a.665.665 0 0 0-.224-.572.805.805 0 0 0-.441-.19c-.737-.078-1.38.722-.97 1.205ZM15.243 24.198a.58.58 0 0 0-.047-.654.686.686 0 0 0-.277-.19c-.764-.298-1.675.362-1.416 1.021.259.66 1.382.548 1.74-.177ZM14.453.764c.35.041.606-.113.409-.381a1.097 1.097 0 0 0-.418-.293c-.397-.155-.562-.085-.626-.03-.209.187.065.635.635.704ZM8.414 4.58c.258.698 1.623.476 2.005-.533.114-.299.096-.59-.044-.802a.584.584 0 0 0-.234-.198c-.782-.369-2.022.734-1.727 1.532ZM9.364 18.503a1.618 1.618 0 0 0-.468-1.108c-.124-.115-.5-.466-1.05-.437-1.027.051-1.28 1.402-.415 2.224.819.773 1.937.379 1.933-.679ZM14.796 25.899c-.032.236.62.013.941-.19.26-.167.28-.278.287-.325a.156.156 0 0 0-.014-.056c-.153-.272-1.165.204-1.214.571ZM5.643 14.597a1.757 1.757 0 0 0-.302-1.072c-.096-.118-.316-.393-.676-.414-.886-.05-1.232 1.476-.513 2.268.6.667 1.451.217 1.491-.782ZM4.852 7.708c.264.628 1.322.331 1.695-.673.177-.477.065-.762.023-.872a.532.532 0 0 0-.261-.258c-.733-.31-1.792 1.005-1.457 1.803ZM11.988.274a.358.358 0 0 0 .133-.2.056.056 0 0 0-.016-.039c-.118-.107-.941.202-.95.434-.007.187.514.098.833-.195ZM10.407 24.062a1.169 1.169 0 0 0-.405-.504c-.309-.222-.597-.25-.75-.207-.442.125-.161.77.47 1.076.542.265.818.017.685-.365ZM12.653 25.426a.707.707 0 0 0-.458-.117c-.286.033-.328.252-.095.452.286.246.763.255.738-.055a.42.42 0 0 0-.185-.28ZM9.156 1.683c.181-.2.203-.311.213-.359a.103.103 0 0 0-.032-.095c-.242-.199-1.35.54-1.316.878.028.267.697.06 1.135-.424ZM6.877 21.384a1.686 1.686 0 0 0-.437-.608c-.44-.36-.705-.293-.799-.247-.451.223.058 1.233.757 1.502.462.177.689-.131.478-.647ZM2.982 10.527c.066-.258.06-.529-.019-.783-.082-.218-.212-.27-.286-.286-.536-.095-1.02 1.224-.654 1.783.255.39.784.1.96-.714ZM5.497 4.03a1.12 1.12 0 0 0 .246-.484c0-.04.008-.11-.037-.143-.254-.19-1.218.762-1.146 1.13.052.259.567-.02.937-.503ZM3.006 17.376c-.169-.213-.35-.317-.486-.28-.409.114-.149 1.189.376 1.555.37.258.54-.11.437-.587a1.764 1.764 0 0 0-.327-.688ZM2.192 6.964c.062-.122.108-.253.134-.388.006-.043.017-.136-.03-.15-.173-.053-.669.822-.598 1.048.05.157.32-.156.494-.514v.004ZM.722 13.682c-.023-.061-.084-.224-.164-.214-.22.03-.176 1.09.054 1.275.135.109.217-.222.198-.58a1.784 1.784 0 0 0-.088-.481Z">
                                        </path>
                                    </g>
                                </svg>
                                <!--[if ENDBLOCK]><![endif]-->
                            </a>
                        </div>
                        <h1 id="auth-heading-title" class="mt-1 text-xl font-medium leading-9">Sign up</h1>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    </div> <!-- resources/views/components/auth/elements/session-message.blade.php -->

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                    <form wire:submit="register" class="space-y-5">

                        <!--[if BLOCK]><![endif]-->
                        <div x-data="{
                            focusedOrFilled: false,
                            focused() {
                                this.focusedOrFilled = true;
                            },
                            blurred() {
                                if (this.$refs.input.value == '') {
                                    this.focusedOrFilled = false;
                                }
                            }
                        }" x-init=" setTimeout(function() { $refs.input.focus(); }, 1);" class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="" @click="$refs.input.focus()"
                                        :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused': focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500':
                                                !focusedOrFilled }"
                                        class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Name
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="name"
                                        class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input wire:model="name" required="required" @focus-.window="$el.focus()"
                                            id="" name="" type="text" x-ref="input"
                                            @focus="focused()" @blur="blurred()"
                                            class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <div x-data="{
                            focusedOrFilled: false,
                            focused() {
                                this.focusedOrFilled = true;
                            },
                            blurred() {
                                if (this.$refs.input.value == '') {
                                    this.focusedOrFilled = false;
                                }
                            }
                        }" x-init="" class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="email" @click="$refs.input.focus()"
                                        :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused': focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500':
                                                !focusedOrFilled }"
                                        class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Email Address
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="email"
                                        class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input wire:model="email" data-auth="email-input" required="required"
                                            @focus-email.window="$el.focus()" id="email" name=""
                                            type="email" x-ref="input" @focus="focused()" @blur="blurred()"
                                            class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <div x-data="{
                            focusedOrFilled: false,
                            focused() {
                                this.focusedOrFilled = true;
                            },
                            blurred() {
                                if (this.$refs.input.value == '') {
                                    this.focusedOrFilled = false;
                                }
                            }
                        }" x-init="" class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="password" @click="$refs.input.focus()"
                                        :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused': focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500':
                                                !focusedOrFilled }"
                                        class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Password
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="password"
                                        class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input wire:model="password" data-auth="password-input" required="required"
                                            @focus-password.window="$el.focus()" id="password" name=""
                                            type="password" x-ref="input" @focus="focused()" @blur="blurred()"
                                            class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->
                        <div x-data="{
                            focusedOrFilled: false,
                            focused() {
                                this.focusedOrFilled = true;
                            },
                            blurred() {
                                if (this.$refs.input.value == '') {
                                    this.focusedOrFilled = false;
                                }
                            }
                        }" x-init="" class="w-full h-auto">
                            <div class="flex relative flex-col justify-center h-11">
                                <div class="flex relative">
                                    <!--[if BLOCK]><![endif]--> <label for="password_confirmation"
                                        @click="$refs.input.focus()"
                                        :class="{ 'top-0 -translate-y-1 ml-2 text-xs auth-component-input-label-focused': focusedOrFilled, 'top-[16px] ml-2.5 text-[15px] text-gray-500':
                                                !focusedOrFilled }"
                                        class="block absolute px-1.5 py-0 font-normal leading-normal bg-white duration-300 ease-out cursor-text auth-component-input dark:text-gray-300 top-[16px] ml-2.5 text-[15px] text-gray-500">
                                        Confirm Password
                                    </label>
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <div data-model="password_confirmation"
                                        class="mt-1.5 w-full rounded-md shadow-sm auth-component-input-container">
                                        <input wire:model="password_confirmation"
                                            data-auth="password-confirmation-input" required="required"
                                            @focus-password_confirmation.window="$el.focus()"
                                            id="password_confirmation" name="" type="password" x-ref="input"
                                            @focus="focused()" @blur="blurred()"
                                            class="auth-component-input appearance-none flex w-full h-11 px-3.5 text-sm bg-white border rounded-md border-gray-300 ring-offset-background placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-zinc-800 disabled:cursor-not-allowed disabled:opacity-50 ">
                                    </div>
                                </div>
                            </div>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        </div> <!--[if ENDBLOCK]><![endif]-->

                        <button type="submit" data-auth="submit-button"
                            class="auth-component-button px-4 py-2.5 text-sm font-medium rounded-md  opacity-[95%] hover:opacity-100 focus:ring-2 focus:ring-offset-2 cursor-pointer inline-flex items-center w-full justify-center disabled:opacity-50 font-semibold focus:outline-none"
                            style=" color:#ffffff; background-color:#09090b; ">
                            <svg xmlns="http://www.w3.org/2000/svg" wire:loading="" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-1.5 w-4 h-4 animate-spin">
                                <path d="M21 12a9 9 0 1 1-6.219-8.56"></path>
                            </svg>
                            Continue
                        </button>
                    </form>

                    <div class="mt-3 space-x-0.5 text-sm leading-5 text-left" style="color:#212936">
                        <span class="opacity-[47%]">Already have an account?</span>
                        <a class="underline cursor-pointer opacity-[67%] hover:opacity-[80%]" data-auth="login-link"
                            href="http://localhost:8000/auth/login" wire:navigate="">
                            Sign in
                        </a>
                    </div>

                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </main>

    </div>
    <!-- Livewire Scripts -->
    <script src="/livewire/livewire.js?id=cc800bf4" data-csrf="HhP9SBvdSlOj4AdjvFYPHgzN0nwpPR9LzTcyyAHN"
        data-update-uri="/livewire/update" data-navigate-once="true"></script>

</body>

</html>
