$(function () {
    $(".form-group a").click(function () {
        let $this = $(this);
        if ($this.hasClass('active')) {
            $this.parents('.form-group').find('input').attr('type', 'password')
            $this.removeClass('active');

            $this.children('i.fa.fa-eye').removeClass('fa-eye').addClass('fa-eye-slash');
        }
        else {
            $this.parents('.form-group').find('input').attr('type', 'text')
            $this.addClass('active');

            $this.children('i.fa.fa-eye-slash').removeClass('fa-eye-slash').addClass('fa-eye');
        }
    })
})
