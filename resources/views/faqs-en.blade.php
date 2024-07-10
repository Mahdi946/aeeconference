@extends('templates.en')
@section('content')


<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2> FAQ</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>   FAQ </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="conditions-section ptb-100">
    <div class="container">
        <div  dir="ltr" class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span style="flex-grow: 1; text-align: start;">What is the UNESCO Technology and Innovation Prize?</span>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            The UNESCO International Technology and Innovation Prize celebrates individuals making significant contributions to technology. Its goal is to promote cooperation and collaboration among scientists worldwide to improve the positive impact of technology in people's lives. The award aims to inspire innovation to tackle global challenges and promote socioeconomic progress.
                        </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                        <span style="flex-grow: 1; text-align: start;">Who awards the UNESCO Technology and Innovation Prize?</span>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            This prize was created in collaboration with UNESCO, the Ministry of Science and Research and Technology of the Islamic Republic of Iran and the University of Tehran.
                        </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading14">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                    <span style="flex-grow: 1; text-align: start;">Where and when is the UNESCO Technology and Innovation Prize presented?</span>
                    </button>
                </h2>
                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            This prize is presented in Tehran, Iran at ?? December.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <span style="flex-grow: 1; text-align: start;">Who is eligible for the prize?</span>
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>

                            Innovative and technological people and teams who have professional activities, as well as owners of innovative, technological and knowledge-based companies.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <span style="flex-grow: 1; text-align: start;">Who select the winner?</span>
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            Winners will be selected by the Prize Policy Council after initial evaluation by the Scientific Committee.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <span style="flex-grow: 1; text-align: start;">What are the prize criteria?</span>
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            The nominated innovation should be recognizable, with clear contributions from the nominees. It must have a sustainable, global, and ethical basis in scientific and academic research, with consideration for its impact on the field and society.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    <span style="flex-grow: 1; text-align: start;">Are there any rules on how to use the prize money?</span>
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            The winner can choose how to use the prize money.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading8">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    <span style="flex-grow: 1; text-align: start;">How often is the prize given?</span>
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            The award is presented biennially.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading9">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    <span style="flex-grow: 1; text-align: start;">Can I nominate myself?</span>
                    </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            No, self-nomination is not possible.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading10">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                    <span style="flex-grow: 1; text-align: start;"> We are a scientific institution, if we introduce a person or a group within our institution, is it considered a self-nomination?</span>
                    </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            If a group of scientists is nominated by an institution, it will not be considered as self-nomination.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading11">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                    <span style="flex-grow: 1; text-align: start;">In what fields is the prize given?</span>
                    </button>
                </h2>
                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            The Policy Council determines the fields of the prize every two years. Currently, the fields of the award are health, energy, and water.
                        </strong>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading12">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                    <span style="flex-grow: 1; text-align: start;">How can I get nominated?</span>
                    </button>
                </h2>
                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>
                            Only those who have received an invitation are eligible to nominate candidates for the award.

                        </strong>

                    </div>
                </div>
            </div>

        </div>



        <div class="default-shape">
            <div class="shape-1">
                <img src="/assets/img/shape/4.png" alt="image">
            </div>

            <div class="shape-2 rotateme">
                <img src="/assets/img/shape/5.svg" alt="image">
            </div>

            <div class="shape-3">
                <img src="/assets/img/shape/6.svg" alt="image">
            </div>

            <div class="shape-4">
                <img src="/assets/img/shape/7.png" alt="image">
            </div>

            <div class="shape-5">
                <img src="/assets/img/shape/8.png" alt="image">
            </div>
        </div>
</section>

@endsection
