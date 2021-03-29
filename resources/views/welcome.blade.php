<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
    @dd("Catch errors for script and full tracking ( 1)");

    <h1 class="header-w3ls">
        Tamkeen
    </h1>
    <div class="main-bothside">
        <form action="{{ route('Request') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>الأسم</p>
                    <input type="text" placeholder="" required="" name="a1">
                </div>
                <div class="form-mid-w3ls">
                    <p>محمول/ واتس</p>

                    <input type="text" placeholder="" required=""  name="a2">
                </div>
            </div>
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>البريد الألكتروني</p>
                    <input type="email" placeholder="" required=""  name="a3">
                </div>
                <div class="form-mid-w3ls">
                    <p>البلد </p>
                    <input type="text" placeholder="" required=""  name="a4">
                </div>
            </div>
            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>القيمة المقترحة أو العرض المقدّم  </p>
                    <h2>ما هي المنافع التى سوف تعطيها لعميلك – و لماذا سيقوم المشتري بشراء منتجك أو خدماتك؟
                    ما هي المشكلة التى تقوم بحلها؟الحاجة التى تغطيتها مثل :
                    محتوى الكتروني مثلاً( دورات – الارشاد والنصح- محتوى متخصص)
                    </h2>
                    <textarea name="a5" placeholder="" required=""></textarea>
                </div>
                <div class="form-mid-w3ls">
                    <p>شراح العملاء </p>
                    <h2>من هم العملاء الذين تسعى مؤسستك لحدمتهم والوصول إليهم؟ وأهم عملائك؟
                    - هل عميلك محدد ( شرائح محدَّدَةٍ ومتخصِّصَة من العملاء) .
                    </h2>
                    <textarea name="a6" placeholder="" required=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>قنوات توزيع المنتج/ الخدمة</p>
                    <h2>Distribution Channels
                    كيف سيصل المنتج إلى العملاء – هل ستقوم بانشاء (محلات التجزئة – متجر الكتروني- منصة الكترونية)
                   </h2>
                   <select class="form-control" id="sel1" name="a7">
                    <option>محلات التجزئة </option>
                    <option>متجر الكتروني </option>
                    <option>منصة الكترونية</option>
                  </select>
                </div>
                <div class="form-mid-w3ls">
                    <p>العلاقات مع العملاء</p>
                    <h2>كيف ستقوم ببناء (علاقة ودية-  علاقات شخصيّة مع عملاءك.
                    – هل ستستخدم وسائل التواصل الاجتماعي - أم ستستخدم التعامل الألكتروني فقط.
                    </h2>
                    <textarea name="a8" placeholder="" required=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>مصادر الإيرادات الدخل</p>
                    <h2>هل العملاء  فعلاً مستعدون للقيام بالدفع مقابل القيمة المقدمة لهم ؟
                    هل من المتوقع تحقيق أرباح من المنتج/ الخدمة)
                    هل مصادر الأرباح متعددة مثل (بيع المنتج - البيع بالعمولة- تأجير منتجات (تأجير أي الالات)
                    </h2>
                    <textarea name="a9" placeholder="" required=""></textarea>
                </div>
                <div class="form-mid-w3ls">
                    <p>الأفعال الرئيسية </p>
                    <h2>ما هي الأفعال الرئيسية التى نحتاجها:
                    لتقديم القيمة التى وعدنا بها العملاء تصميم تطبيق الكتروني- تعيين كوادر إدارية للدعم الفني- صناعة المحتوى – توفير خطة التسويق – تأسيس مقر إداري حتى نصل الى التدفقات النقدية؟
                   </h2>
                    <textarea name="a10" placeholder=" " required=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>الموارد الرئيسية لمشروعك </p>
                    <h2>الأصول الماديةPhysical  كالمعدات والموقع الألكتروني وشبكات التوزيع.
                    الأصول الفكرية (Intellectual Assets) :
                    مثل العلامات التجاريَّة والمعرفة المملوكة ،وبراءة الاختراعات وحقوق التأليف والنشر والشراكات وقواعد بيانات العملاء،
                    </h2>
                    <textarea name="a11" placeholder="" required=""></textarea>
                </div>
                <div class="form-mid-w3ls">
                    <p>الشركاء الأساسيّون </p>
                    <h2>من هم شركائنا الرئسيون؟
                    من هم موردينا الرئيسيون؟
                    هل لديك شبكة من الخبراء – مستقلين للعمل معك؟
                    </h2>
                    <textarea name="a12" placeholder="" required=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-mid-w3ls">
                    <p>هيكل التكاليف </p>
                    <h2>هناك تكاليف تأسيس وتكاليف تشغيل.
                    تكاليف التأسيس:تدفع في البداية. تكالف التشغيل :مثل تكاليف المواد الخام – الصيانة- الاجور.
                    </h2>
                    <textarea name="a13" placeholder="" required=""></textarea>
                </div>
         >
            </div>


            <div class="btnn">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    @include('copy')
</body>

</html>
