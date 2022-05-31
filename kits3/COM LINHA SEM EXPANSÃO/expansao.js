<><script>
    document.addEventListener('DOMContentLoaded', function() {jQuery(function ($) {
        $('.showme').click(function () {
            $(this).closest('.elementor-section').next().slideToggle();
            $(this).toggleClass('opened');
        });
        $('.closebutton').click(function () {
            $(this).closest('.elementor-section').prev().find('.showme').click();
        });
    })};
    );
</script><style>
        .showme a, 
        .showme svg, 
        .showme i , 
        .showme img, 
        .closebutton a, 
        .closebutton i, 
        .closebutton img{cursor}: pointer;
        -webkit-transition: transform 0.34s ease;
        transition : transform 0.34s ease;
        }
        .opened i , 
        .opened img,
        .opened svg{transform}: rotate(90deg);
        }
    </style></>

/*https://painel.napoleon.com.br/knowledgebase/15/Como-esconder-ou-expandir-com-um-clique-uma-Secao-no-Elementor.html*/