<template>
    <div class="card">
        <div class="card-header">{{ $t('auth.register') }}</div>
        <div class="card-body">
            <h4>{{ $t('modules.auth.Infos register') }}</h4>
            <p>{{ $t('modules.auth.Infos register part 1') }} <a href="#">{{ $t('modules.auth.Confidentiality') }}</a>
            {{ $t('modules.auth.Infos register part 2') }} <a href="#"> {{ $t('modules.auth.CGV') }} </a> .</p>
            <a :href="routes('register')" class="btn btn-outline-prototype">{{ $t('auth.register') }}</a>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            //
        }
    }
</script>