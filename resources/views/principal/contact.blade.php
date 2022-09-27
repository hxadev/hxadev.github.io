<div class="content lozad">
    <section id="contact" class="contact">
        <div class="container">
            <h1 data-aos="zoom-in-up"> <i class="fas fa-address-book"></i> {{__("contact.title")}}</h1>
            <p data-aos="zoom-in-up">{{__("contact.description")}}</p>

            <div data-aos="zoom-in-up" class="container">
                <div class="form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="contactName">{{__("contact.form.name")}}</label>
                                <input type="text" class="form-control" id="contactName">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="contactEmail">{{__("contact.form.email")}}</label>
                                <input type="email" class="form-control" id="contactEmail">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="subjectEmail">{{__("contact.form.subject")}}</label>
                                <input type="email" class="form-control" id="subjectEmail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="contactMessage">{{__("contact.form.message")}}</label>
                                <textarea name="contactMessage" class="form-control" id="" cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-primary float-right">{{__("contact.form.button")}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
