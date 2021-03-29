<!DOCTYPE html>
<html lang="en">
@include('head')
<style>
    p.abc {
        background: white;
        color: black;
        text-indent: 10px;
        font-size: 9px;
        font-weight: bold;
    }
</style>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ebb153320601449"></script>

<body>
    <h1 class="header-w3ls">
        Tamkeen
    </h1>
    <div class="main-bothside">
        <form action="{{ route('Request') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>الأسم</p>
                   <p class="abc">{{ $form->a1}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>البريد الألكتروني</p>
                    <p class="abc">{{ $form->a2}}</p>
                </div>
            </div>
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>محمول/ واتس</p>
                    <p class="abc">{{ $form->a3}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>البلد </p>
                    <p class="abc">{{ $form->a4}}</p>
                </div>
            </div>
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>القيمة المقترحة أو العرض المقدّم  </p>
                    <p class="abc">{{ $form->a5}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>شراح العملاء </p>
                    <p class="abc">{{ $form->a6}}</p>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>قنوات توزيع المنتج/ الخدمة</p>
                    <p class="abc">{{ $form->a7}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>العلاقات مع العملاء</p>
                    <p class="abc">{{ $form->a8}}</p>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>مصادر الإيرادات الدخل</p>
                    <p class="abc">{{ $form->a9}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>الأفعال الرئيسية </p>
                    <p class="abc">{{ $form->a10}}</p>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>الموارد الرئيسية لمشروعك </p>
                    <p class="abc">{{ $form->a11}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>الشركاء الأساسيّون </p>
                    <p class="abc">{{ $form->a12}}</p>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>هيكل التكاليف </p>
                    <p class="abc">{{ $form->a13}}</p>
                </div>
                <div class="form-mid-w3ls">
                    <p>ملاحظات</p>
                    <p class="abc">{{ $form->a14}}</p>
                </div>
            </div>


            <div class="btnn">
                {{-- <a href="http://www.facebook.com/sharer.php?u={{ Request::url() }}" class="btn btn-success">FACEBOOK</a> --}}

         
                
                <br>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </form>
 
    </div>

    
             

<!-- Go to www.addthis.com/dashboard to customize your tools -->




   <!-- Go to www.addthis.com/dashboard to customize your tools -->
               
            



    @include('copy')
</body>

</html>
