@extends('admin.layouts.index')

@section('content')
    <div class="card mb-5 mb-xl-10 w-50 mx-auto">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Profile Details</h3>
            </div>
        </div>
        <div id="kt_account_settings_profile_details" class="collapse show">
            
            <form method="POST" action="/admin/profile" id="kt_account_profile_details_form" class="form"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="file" name="avatar" />
                                    @error('avatar')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="first_name"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="First name" value="{{ old('first_name') }}" />
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 fv-row">
                                    <input type="text" name="last_name"
                                        class="form-control form-control-lg form-control-solid" placeholder="Last name"
                                        value="{{ old('last_name') }}" />
                                    @error('last_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                        <div class="col-lg-8 fv-row">
                            <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                placeholder="Email" value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Age</label>
                        <div class="col-lg-8 fv-row">
                            <input type="number" name="age" class="form-control form-control-lg form-control-solid"
                                placeholder="Age" value="{{ old('age') }}" />
                            @error('age')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="company_name"
                                class="form-control form-control-lg form-control-solid" placeholder="Company name"
                                value="{{ old('company') }}" />
                            @error('company_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Contact Phone</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Phone number must be active"></i>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <input type="tel" name="phone" class="form-control form-control-lg form-control-solid"
                                placeholder="Phone number" value="{{ old('phone') }}" />
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Company Site</label>
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="website" class="form-control form-control-lg form-control-solid"
                                placeholder="Company website" value="{{ old('website') }}" />
                            @error('website')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Country</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                title="Country of origination"></i>
                        </label>
                        <div class="col-lg-8 fv-row">
                            <select id="kt_ecommerce_select2_country" class="form-select form-select-solid lh-1 py-3"
                                name="country" data-kt-ecommerce-settings-type="select2_flags"
                                data-placeholder="Select a country">
                                <option></option>
                                <option data-kt-select2-country="/assets/media/flags/afghanistan.svg">
                                    Afghanistan</option>
                                <option data-kt-select2-country="/assets/media/flags/aland-islands.svg">
                                    Aland Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/albania.svg">Albania
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/algeria.svg">Algeria
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/american-samoa.svg">
                                    American Samoa</option>
                                <option data-kt-select2-country="/assets/media/flags/andorra.svg">Andorra
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/angola.svg">Angola
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/anguilla.svg">Anguilla
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/antigua-and-barbuda.svg">Antigua and
                                    Barbuda</option>
                                <option data-kt-select2-country="/assets/media/flags/argentina.svg">
                                    Argentina</option>
                                <option data-kt-select2-country="/assets/media/flags/armenia.svg">Armenia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/aruba.svg">Aruba
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/australia.svg"="selected">Australia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/austria.svg">Austria
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/azerbaijan.svg">
                                    Azerbaijan</option>
                                <option data-kt-select2-country="/assets/media/flags/bahamas.svg">Bahamas
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/bahrain.svg">Bahrain
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/bangladesh.svg">
                                    Bangladesh</option>
                                <option data-kt-select2-country="/assets/media/flags/barbados.svg">Barbados
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/belarus.svg">Belarus
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/belgium.svg">Belgium
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/belize.svg">Belize
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/benin.svg">Benin
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/bermuda.svg">Bermuda
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/bhutan.svg">Bhutan
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/bolivia.svg">Bolivia,
                                    Plurinational State of</option>
                                <option data-kt-select2-country="/assets/media/flags/bonaire.svg">Bonaire,
                                    Sint Eustatius and Saba</option>
                                <option data-kt-select2-country="/assets/media/flags/bosnia-and-herzegovina.svg">Bosnia and
                                    Herzegovina</option>
                                <option data-kt-select2-country="/assets/media/flags/botswana.svg">Botswana
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/brazil.svg">Brazil
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/british-indian-ocean-territory.svg">
                                    British Indian Ocean Territory</option>
                                <option data-kt-select2-country="/assets/media/flags/brunei.svg">Brunei
                                    Darussalam</option>
                                <option data-kt-select2-country="/assets/media/flags/bulgaria.svg">Bulgaria
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/burkina-faso.svg">
                                    Burkina Faso</option>
                                <option data-kt-select2-country="/assets/media/flags/burundi.svg">Burundi
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/cambodia.svg">Cambodia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/cameroon.svg">Cameroon
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/canada.svg">Canada
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/cape-verde.svg">Cape
                                    Verde</option>
                                <option data-kt-select2-country="/assets/media/flags/cayman-islands.svg">
                                    Cayman Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/central-african-republic.svg">Central
                                    African Republic</option>
                                <option data-kt-select2-country="/assets/media/flags/chad.svg">Chad
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/chile.svg">Chile
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/china.svg">China
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/christmas-island.svg">
                                    Christmas Island</option>
                                <option data-kt-select2-country="/assets/media/flags/cocos-island.svg">
                                    Cocos (Keeling) Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/colombia.svg">Colombia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/comoros.svg">Comoros
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/cook-islands.svg">Cook
                                    Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/costa-rica.svg">Costa
                                    Rica</option>
                                <option data-kt-select2-country="/assets/media/flags/ivory-coast.svg">Côte
                                    d'Ivoire</option>
                                <option data-kt-select2-country="/assets/media/flags/croatia.svg">Croatia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/cuba.svg">Cuba
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/curacao.svg">Curaçao
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/czech-republic.svg">
                                    Czech Republic</option>
                                <option data-kt-select2-country="/assets/media/flags/denmark.svg">Denmark
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/djibouti.svg">Djibouti
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/dominica.svg">Dominica
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/dominican-republic.svg">Dominican
                                    Republic
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/ecuador.svg">Ecuador
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/egypt.svg">Egypt
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/el-salvador.svg">El
                                    Salvador</option>
                                <option data-kt-select2-country="/assets/media/flags/equatorial-guinea.svg">Equatorial
                                    Guinea
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/eritrea.svg">Eritrea
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/estonia.svg">Estonia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/ethiopia.svg">Ethiopia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/falkland-islands.svg">
                                    Falkland Islands (Malvinas)</option>
                                <option data-kt-select2-country="/assets/media/flags/fiji.svg">Fiji
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/finland.svg">Finland
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/france.svg">France
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/french-polynesia.svg">
                                    French Polynesia</option>
                                <option data-kt-select2-country="/assets/media/flags/gabon.svg">Gabon
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/gambia.svg">Gambia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/georgia.svg">Georgia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/germany.svg">Germany
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/ghana.svg">Ghana
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/gibraltar.svg">
                                    Gibraltar</option>
                                <option data-kt-select2-country="/assets/media/flags/greece.svg">Greece
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/greenland.svg">
                                    Greenland</option>
                                <option data-kt-select2-country="/assets/media/flags/grenada.svg">Grenada
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/guam.svg">Guam
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/guatemala.svg">
                                    Guatemala</option>
                                <option data-kt-select2-country="/assets/media/flags/guernsey.svg">Guernsey
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/guinea.svg">Guinea
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/guinea-bissau.svg">
                                    Guinea-Bissau</option>
                                <option data-kt-select2-country="/assets/media/flags/haiti.svg">Haiti
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/vatican-city.svg">Holy
                                    See (Vatican City State)</option>
                                <option data-kt-select2-country="/assets/media/flags/honduras.svg">Honduras
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/hong-kong.svg">Hong
                                    Kong</option>
                                <option data-kt-select2-country="/assets/media/flags/hungary.svg">Hungary
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/iceland.svg">Iceland
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/india.svg">India
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/indonesia.svg">
                                    Indonesia</option>
                                <option data-kt-select2-country="/assets/media/flags/iran.svg">Iran,
                                    Islamic Republic of</option>
                                <option data-kt-select2-country="/assets/media/flags/iraq.svg">Iraq
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/ireland.svg">Ireland
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/isle-of-man.svg">Isle
                                    of Man</option>
                                <option data-kt-select2-country="/assets/media/flags/israel.svg">Israel
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/italy.svg">Italy
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/jamaica.svg">Jamaica
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/japan.svg">Japan
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/jersey.svg">Jersey
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/jordan.svg">Jordan
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/kazakhstan.svg">
                                    Kazakhstan</option>
                                <option data-kt-select2-country="/assets/media/flags/kenya.svg">Kenya
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/kiribati.svg">Kiribati
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/north-korea.svg">
                                    Korea, Democratic People's Republic of</option>
                                <option data-kt-select2-country="/assets/media/flags/kuwait.svg">Kuwait
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/kyrgyzstan.svg">
                                    Kyrgyzstan</option>
                                <option data-kt-select2-country="/assets/media/flags/laos.svg">Lao People's
                                    Democratic Republic</option>
                                <option data-kt-select2-country="/assets/media/flags/latvia.svg">Latvia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/lebanon.svg">Lebanon
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/lesotho.svg">Lesotho
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/liberia.svg">Liberia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/libya.svg">Libya
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/liechtenstein.svg">
                                    Liechtenstein</option>
                                <option data-kt-select2-country="/assets/media/flags/lithuania.svg">
                                    Lithuania</option>
                                <option data-kt-select2-country="/assets/media/flags/luxembourg.svg">
                                    Luxembourg</option>
                                <option data-kt-select2-country="/assets/media/flags/macao.svg">Macao
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/madagascar.svg">
                                    Madagascar</option>
                                <option data-kt-select2-country="/assets/media/flags/malawi.svg">Malawi
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/malaysia.svg">Malaysia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/maldives.svg">Maldives
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/mali.svg">Mali
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/malta.svg">Malta
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/marshall-island.svg">
                                    Marshall Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/martinique.svg">
                                    Martinique</option>
                                <option data-kt-select2-country="/assets/media/flags/mauritania.svg">
                                    Mauritania</option>
                                <option data-kt-select2-country="/assets/media/flags/mauritius.svg">
                                    Mauritius</option>
                                <option data-kt-select2-country="/assets/media/flags/mexico.svg">Mexico
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/micronesia.svg">
                                    Micronesia, Federated States of</option>
                                <option data-kt-select2-country="/assets/media/flags/moldova.svg">Moldova,
                                    Republic of</option>
                                <option data-kt-select2-country="/assets/media/flags/monaco.svg">Monaco
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/mongolia.svg">Mongolia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/montenegro.svg">
                                    Montenegro</option>
                                <option data-kt-select2-country="/assets/media/flags/montserrat.svg">
                                    Montserrat</option>
                                <option data-kt-select2-country="/assets/media/flags/morocco.svg">Morocco
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/mozambique.svg">
                                    Mozambique</option>
                                <option data-kt-select2-country="/assets/media/flags/myanmar.svg">Myanmar
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/namibia.svg">Namibia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/nauru.svg">Nauru
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/nepal.svg">Nepal
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/netherlands.svg">
                                    Netherlands</option>
                                <option data-kt-select2-country="/assets/media/flags/new-zealand.svg">New
                                    Zealand</option>
                                <option data-kt-select2-country="/assets/media/flags/nicaragua.svg">
                                    Nicaragua</option>
                                <option data-kt-select2-country="/assets/media/flags/niger.svg">Niger
                                </option>
                                <option @selected(true)
                                    data-kt-select2-country="/assets/media/flags/nigeria.svg">Nigeria
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/niue.svg">Niue
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/norfolk-island.svg">
                                    Norfolk Island</option>
                                <option data-kt-select2-country="/assets/media/flags/northern-mariana-islands.svg">Northern
                                    Mariana Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/norway.svg">Norway
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/oman.svg">Oman
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/pakistan.svg">Pakistan
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/palau.svg">Palau
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/palestine.svg">
                                    Palestinian Territory, Occupied</option>
                                <option data-kt-select2-country="/assets/media/flags/panama.svg">Panama
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/papua-new-guinea.svg">
                                    Papua New Guinea</option>
                                <option data-kt-select2-country="/assets/media/flags/paraguay.svg">Paraguay
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/peru.svg">Peru
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/philippines.svg">
                                    Philippines</option>
                                <option data-kt-select2-country="/assets/media/flags/poland.svg">Poland
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/portugal.svg">Portugal
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/puerto-rico.svg">
                                    Puerto Rico</option>
                                <option data-kt-select2-country="/assets/media/flags/qatar.svg">Qatar
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/romania.svg">Romania
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/russia.svg">Russian
                                    Federation</option>
                                <option data-kt-select2-country="/assets/media/flags/rwanda.svg">Rwanda
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/st-barts.svg">Saint
                                    Barthélemy</option>
                                <option data-kt-select2-country="/assets/media/flags/saint-kitts-and-nevis.svg">Saint Kitts
                                    and
                                    Nevis</option>
                                <option data-kt-select2-country="/assets/media/flags/st-lucia.svg">Saint
                                    Lucia</option>
                                <option data-kt-select2-country="/assets/media/flags/sint-maarten.svg">
                                    Saint Martin (French part)</option>
                                <option data-kt-select2-country="/assets/media/flags/st-vincent-and-the-grenadines.svg">
                                    Saint
                                    Vincent and the Grenadines</option>
                                <option data-kt-select2-country="/assets/media/flags/samoa.svg">Samoa
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/san-marino.svg">San
                                    Marino</option>
                                <option data-kt-select2-country="/assets/media/flags/sao-tome-and-prince.svg">Sao Tome and
                                    Principe</option>
                                <option data-kt-select2-country="/assets/media/flags/saudi-arabia.svg">
                                    Saudi Arabia</option>
                                <option data-kt-select2-country="/assets/media/flags/senegal.svg">Senegal
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/serbia.svg">Serbia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/seychelles.svg">
                                    Seychelles</option>
                                <option data-kt-select2-country="/assets/media/flags/sierra-leone.svg">
                                    Sierra Leone</option>
                                <option data-kt-select2-country="/assets/media/flags/singapore.svg">
                                    Singapore</option>
                                <option data-kt-select2-country="/assets/media/flags/sint-maarten.svg">Sint
                                    Maarten (Dutch part)</option>
                                <option data-kt-select2-country="/assets/media/flags/slovakia.svg">Slovakia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/slovenia.svg">Slovenia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/solomon-islands.svg">
                                    Solomon Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/somalia.svg">Somalia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/south-africa.svg">
                                    South Africa</option>
                                <option data-kt-select2-country="/assets/media/flags/south-korea.svg">South
                                    Korea</option>
                                <option data-kt-select2-country="/assets/media/flags/south-sudan.svg">South
                                    Sudan</option>
                                <option data-kt-select2-country="/assets/media/flags/spain.svg">Spain
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/sri-lanka.svg">Sri
                                    Lanka</option>
                                <option data-kt-select2-country="/assets/media/flags/sudan.svg">Sudan
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/suriname.svg">Suriname
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/swaziland.svg">
                                    Swaziland</option>
                                <option data-kt-select2-country="/assets/media/flags/sweden.svg">Sweden
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/switzerland.svg">
                                    Switzerland</option>
                                <option data-kt-select2-country="/assets/media/flags/syria.svg">Syrian Arab
                                    Republic</option>
                                <option data-kt-select2-country="/assets/media/flags/taiwan.svg">Taiwan,
                                    Province of China</option>
                                <option data-kt-select2-country="/assets/media/flags/tajikistan.svg">
                                    Tajikistan</option>
                                <option data-kt-select2-country="/assets/media/flags/tanzania.svg">
                                    Tanzania, United Republic of</option>
                                <option data-kt-select2-country="/assets/media/flags/thailand.svg">Thailand
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/togo.svg">Togo
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/tokelau.svg">Tokelau
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/tonga.svg">Tonga
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/trinidad-and-tobago.svg">Trinidad and
                                    Tobago</option>
                                <option data-kt-select2-country="/assets/media/flags/tunisia.svg">Tunisia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/turkey.svg">Turkey
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/turkmenistan.svg">
                                    Turkmenistan</option>
                                <option data-kt-select2-country="/assets/media/flags/turks-and-caicos.svg">
                                    Turks and Caicos Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/tuvalu.svg">Tuvalu
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/uganda.svg">Uganda
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/ukraine.svg">Ukraine
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/united-arab-emirates.svg">United Arab
                                    Emirates</option>
                                <option data-kt-select2-country="/assets/media/flags/united-kingdom.svg">
                                    United Kingdom</option>
                                <option data-kt-select2-country="/assets/media/flags/united-states.svg">
                                    United States</option>
                                <option data-kt-select2-country="/assets/media/flags/uruguay.svg">Uruguay
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/uzbekistan.svg">
                                    Uzbekistan</option>
                                <option data-kt-select2-country="/assets/media/flags/vanuatu.svg">Vanuatu
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/venezuela.svg">
                                    Venezuela, Bolivarian Republic of</option>
                                <option data-kt-select2-country="/assets/media/flags/vietnam.svg">Vietnam
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/virgin-islands.svg">
                                    Virgin Islands</option>
                                <option data-kt-select2-country="/assets/media/flags/yemen.svg">Yemen
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/zambia.svg">Zambia
                                </option>
                                <option data-kt-select2-country="/assets/media/flags/zimbabwe.svg">Zimbabwe
                                </option>
                            </select>
                            @error('country')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Freelance</label>
                        <div class="col-lg-8 fv-row">
                            <input type="freelance" name="freelance"
                                class="form-control form-control-lg form-control-solid" placeholder="freelance"
                                value="{{ old('freelance') }}" />
                            @error('freelance')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="content d-flex flex-column flex-column-fluid mx-auto" id="kt_content">

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">

                        <div class="card-toolbar">
                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder">Update Profile : {{ $profile->first_name }}
                                                {{ $profile->last_name }}</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                data-kt-users-modal-action="close">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137"
                                                            width="16" height="2" rx="1"
                                                            transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16"
                                                            height="2" rx="1"
                                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <!--begin::Form-->

                                            <form action="/admin/profile" method="POST"
                                                id="kt_modal_add_user_form" class="form" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="card-body border-top p-9">
                                                    <div class="row mb-6">
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                                        <div class="col-lg-8">
                                                            <div class="image-input image-input-outline"
                                                                data-kt-image-input="true"
                                                                style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                                <div class="image-input-wrapper w-125px h-125px"
                                                                    style="background-image: url({{ asset('storage/' . $profile->avatar) }})">
                                                                </div>
                                                                <label
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="change"
                                                                    data-bs-toggle="tooltip" title="Change avatar">
                                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                                    <input type="file" name="avatar"
                                                                        accept=".png, .jpg, .jpeg" />

                                                                    <input type="hidden" name="avatar_remove" />
                                                                </label>
                                                                <span
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="cancel"
                                                                    data-bs-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                                                <span
                                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                    data-kt-image-input-action="remove"
                                                                    data-bs-toggle="tooltip" title="Remove avatar">
                                                                    <i class="bi bi-x fs-2"></i>
                                                                </span>
                                                            </div>
                                                            <div class="form-text">Allowed file types: png, jpg, jpeg.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label class="col-lg-4 col-form-label required fw-bold fs-6">Full
                                                            Name</label>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-6 fv-row">
                                                                    <input type="text" name="first_name"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="First name"
                                                                        value="{{ $profile->first_name }}" />
                                                                    @error('first_name')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-lg-6 fv-row">
                                                                    <input type="text" name="last_name"
                                                                        class="form-control form-control-lg form-control-solid"
                                                                        placeholder="Last name"
                                                                        value="{{ $profile->last_name }}" />
                                                                    @error('last_name')
                                                                        <p class="text-danger">{{ $message }}</p>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="email" name="email"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Email" value="{{ $profile->email }}" />
                                                            @error('email')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">Age</label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="number" name="age"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Age" value="{{ $profile->age }}" />
                                                            @error('age')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">Company</label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="text" name="company_name"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Company name"
                                                                value="{{ $profile->company_name }}" />
                                                            @error('company_name')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                            <span class="required">Contact Phone</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Phone number must be active"></i>
                                                        </label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="tel" name="phone"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Phone number"
                                                                value="{{ $profile->phone }}" />
                                                            @error('phone')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Company
                                                            Site</label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="text" name="website"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="Company website"
                                                                value="{{ $profile->website }}" />
                                                            @error('website')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-6">
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                            <span class="required">Country</span>
                                                            <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                                data-bs-toggle="tooltip"
                                                                title="Country of origination"></i>
                                                        </label>
                                                        <div class="col-lg-8 fv-row">
                                                            <select id="kt_ecommerce_select2_country"
                                                                class="form-select form-select-solid lh-1 py-3"
                                                                name="country"
                                                                data-kt-ecommerce-settings-type="select2_flags"
                                                                data-placeholder="Select a country">
                                                                <option></option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/afghanistan.svg">
                                                                    Afghanistan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/aland-islands.svg">
                                                                    Aland Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/albania.svg">
                                                                    Albania
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/algeria.svg">
                                                                    Algeria
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/american-samoa.svg">
                                                                    American Samoa</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/andorra.svg">
                                                                    Andorra
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/angola.svg">
                                                                    Angola
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/anguilla.svg">
                                                                    Anguilla
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/antigua-and-barbuda.svg">
                                                                    Antigua and
                                                                    Barbuda</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/argentina.svg">
                                                                    Argentina</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/armenia.svg">
                                                                    Armenia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/aruba.svg">
                                                                    Aruba
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/australia.svg"="selected">
                                                                    Australia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/austria.svg">
                                                                    Austria
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/azerbaijan.svg">
                                                                    Azerbaijan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bahamas.svg">
                                                                    Bahamas
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bahrain.svg">
                                                                    Bahrain
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bangladesh.svg">
                                                                    Bangladesh</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/barbados.svg">
                                                                    Barbados
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/belarus.svg">
                                                                    Belarus
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/belgium.svg">
                                                                    Belgium
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/belize.svg">
                                                                    Belize
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/benin.svg">
                                                                    Benin
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bermuda.svg">
                                                                    Bermuda
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bhutan.svg">
                                                                    Bhutan
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bolivia.svg">
                                                                    Bolivia,
                                                                    Plurinational State of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bonaire.svg">
                                                                    Bonaire,
                                                                    Sint Eustatius and Saba</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bosnia-and-herzegovina.svg">
                                                                    Bosnia and
                                                                    Herzegovina</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/botswana.svg">
                                                                    Botswana
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/brazil.svg">
                                                                    Brazil
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/british-indian-ocean-territory.svg">
                                                                    British Indian Ocean Territory</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/brunei.svg">
                                                                    Brunei
                                                                    Darussalam</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/bulgaria.svg">
                                                                    Bulgaria
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/burkina-faso.svg">
                                                                    Burkina Faso</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/burundi.svg">
                                                                    Burundi
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cambodia.svg">
                                                                    Cambodia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cameroon.svg">
                                                                    Cameroon
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/canada.svg">
                                                                    Canada
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cape-verde.svg">
                                                                    Cape
                                                                    Verde</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cayman-islands.svg">
                                                                    Cayman Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/central-african-republic.svg">
                                                                    Central
                                                                    African Republic</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/chad.svg">
                                                                    Chad
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/chile.svg">
                                                                    Chile
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/china.svg">
                                                                    China
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/christmas-island.svg">
                                                                    Christmas Island</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cocos-island.svg">
                                                                    Cocos (Keeling) Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/colombia.svg">
                                                                    Colombia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/comoros.svg">
                                                                    Comoros
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cook-islands.svg">
                                                                    Cook
                                                                    Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/costa-rica.svg">
                                                                    Costa
                                                                    Rica</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ivory-coast.svg">
                                                                    Côte
                                                                    d'Ivoire</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/croatia.svg">
                                                                    Croatia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/cuba.svg">
                                                                    Cuba
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/curacao.svg">
                                                                    Curaçao
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/czech-republic.svg">
                                                                    Czech Republic</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/denmark.svg">
                                                                    Denmark
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/djibouti.svg">
                                                                    Djibouti
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/dominica.svg">
                                                                    Dominica
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/dominican-republic.svg">
                                                                    Dominican
                                                                    Republic
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ecuador.svg">
                                                                    Ecuador
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/egypt.svg">
                                                                    Egypt
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/el-salvador.svg">
                                                                    El
                                                                    Salvador</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/equatorial-guinea.svg">
                                                                    Equatorial
                                                                    Guinea
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/eritrea.svg">
                                                                    Eritrea
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/estonia.svg">
                                                                    Estonia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ethiopia.svg">
                                                                    Ethiopia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/falkland-islands.svg">
                                                                    Falkland Islands (Malvinas)</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/fiji.svg">
                                                                    Fiji
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/finland.svg">
                                                                    Finland
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/france.svg">
                                                                    France
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/french-polynesia.svg">
                                                                    French Polynesia</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/gabon.svg">
                                                                    Gabon
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/gambia.svg">
                                                                    Gambia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/georgia.svg">
                                                                    Georgia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/germany.svg">
                                                                    Germany
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ghana.svg">
                                                                    Ghana
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/gibraltar.svg">
                                                                    Gibraltar</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/greece.svg">
                                                                    Greece
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/greenland.svg">
                                                                    Greenland</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/grenada.svg">
                                                                    Grenada
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/guam.svg">
                                                                    Guam
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/guatemala.svg">
                                                                    Guatemala</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/guernsey.svg">
                                                                    Guernsey
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/guinea.svg">
                                                                    Guinea
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/guinea-bissau.svg">
                                                                    Guinea-Bissau</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/haiti.svg">
                                                                    Haiti
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/vatican-city.svg">
                                                                    Holy
                                                                    See (Vatican City State)</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/honduras.svg">
                                                                    Honduras
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/hong-kong.svg">
                                                                    Hong
                                                                    Kong</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/hungary.svg">
                                                                    Hungary
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/iceland.svg">
                                                                    Iceland
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/india.svg">
                                                                    India
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/indonesia.svg">
                                                                    Indonesia</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/iran.svg">
                                                                    Iran,
                                                                    Islamic Republic of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/iraq.svg">
                                                                    Iraq
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ireland.svg">
                                                                    Ireland
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/isle-of-man.svg">
                                                                    Isle
                                                                    of Man</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/israel.svg">
                                                                    Israel
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/italy.svg">
                                                                    Italy
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/jamaica.svg">
                                                                    Jamaica
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/japan.svg">
                                                                    Japan
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/jersey.svg">
                                                                    Jersey
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/jordan.svg">
                                                                    Jordan
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/kazakhstan.svg">
                                                                    Kazakhstan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/kenya.svg">
                                                                    Kenya
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/kiribati.svg">
                                                                    Kiribati
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/north-korea.svg">
                                                                    Korea, Democratic People's Republic of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/kuwait.svg">
                                                                    Kuwait
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/kyrgyzstan.svg">
                                                                    Kyrgyzstan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/laos.svg">
                                                                    Lao People's
                                                                    Democratic Republic</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/latvia.svg">
                                                                    Latvia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/lebanon.svg">
                                                                    Lebanon
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/lesotho.svg">
                                                                    Lesotho
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/liberia.svg">
                                                                    Liberia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/libya.svg">
                                                                    Libya
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/liechtenstein.svg">
                                                                    Liechtenstein</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/lithuania.svg">
                                                                    Lithuania</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/luxembourg.svg">
                                                                    Luxembourg</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/macao.svg">
                                                                    Macao
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/madagascar.svg">
                                                                    Madagascar</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/malawi.svg">
                                                                    Malawi
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/malaysia.svg">
                                                                    Malaysia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/maldives.svg">
                                                                    Maldives
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mali.svg">
                                                                    Mali
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/malta.svg">
                                                                    Malta
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/marshall-island.svg">
                                                                    Marshall Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/martinique.svg">
                                                                    Martinique</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mauritania.svg">
                                                                    Mauritania</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mauritius.svg">
                                                                    Mauritius</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mexico.svg">
                                                                    Mexico
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/micronesia.svg">
                                                                    Micronesia, Federated States of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/moldova.svg">
                                                                    Moldova,
                                                                    Republic of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/monaco.svg">
                                                                    Monaco
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mongolia.svg">
                                                                    Mongolia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/montenegro.svg">
                                                                    Montenegro</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/montserrat.svg">
                                                                    Montserrat</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/morocco.svg">
                                                                    Morocco
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/mozambique.svg">
                                                                    Mozambique</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/myanmar.svg">
                                                                    Myanmar
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/namibia.svg">
                                                                    Namibia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/nauru.svg">
                                                                    Nauru
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/nepal.svg">
                                                                    Nepal
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/netherlands.svg">
                                                                    Netherlands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/new-zealand.svg">
                                                                    New
                                                                    Zealand</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/nicaragua.svg">
                                                                    Nicaragua</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/niger.svg">
                                                                    Niger
                                                                </option>
                                                                <option @selected(true)
                                                                    data-kt-select2-country="/assets/media/flags/nigeria.svg">
                                                                    Nigeria
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/niue.svg">
                                                                    Niue
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/norfolk-island.svg">
                                                                    Norfolk Island</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/northern-mariana-islands.svg">
                                                                    Northern
                                                                    Mariana Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/norway.svg">
                                                                    Norway
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/oman.svg">
                                                                    Oman
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/pakistan.svg">
                                                                    Pakistan
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/palau.svg">
                                                                    Palau
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/palestine.svg">
                                                                    Palestinian Territory, Occupied</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/panama.svg">
                                                                    Panama
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/papua-new-guinea.svg">
                                                                    Papua New Guinea</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/paraguay.svg">
                                                                    Paraguay
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/peru.svg">
                                                                    Peru
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/philippines.svg">
                                                                    Philippines</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/poland.svg">
                                                                    Poland
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/portugal.svg">
                                                                    Portugal
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/puerto-rico.svg">
                                                                    Puerto Rico</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/qatar.svg">
                                                                    Qatar
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/romania.svg">
                                                                    Romania
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/russia.svg">
                                                                    Russian
                                                                    Federation</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/rwanda.svg">
                                                                    Rwanda
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/st-barts.svg">
                                                                    Saint
                                                                    Barthélemy</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/saint-kitts-and-nevis.svg">
                                                                    Saint Kitts
                                                                    and
                                                                    Nevis</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/st-lucia.svg">
                                                                    Saint
                                                                    Lucia</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sint-maarten.svg">
                                                                    Saint Martin (French part)</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/st-vincent-and-the-grenadines.svg">
                                                                    Saint
                                                                    Vincent and the Grenadines</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/samoa.svg">
                                                                    Samoa
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/san-marino.svg">
                                                                    San
                                                                    Marino</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sao-tome-and-prince.svg">
                                                                    Sao Tome and
                                                                    Principe</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/saudi-arabia.svg">
                                                                    Saudi Arabia</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/senegal.svg">
                                                                    Senegal
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/serbia.svg">
                                                                    Serbia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/seychelles.svg">
                                                                    Seychelles</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sierra-leone.svg">
                                                                    Sierra Leone</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/singapore.svg">
                                                                    Singapore</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sint-maarten.svg">
                                                                    Sint
                                                                    Maarten (Dutch part)</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/slovakia.svg">
                                                                    Slovakia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/slovenia.svg">
                                                                    Slovenia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/solomon-islands.svg">
                                                                    Solomon Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/somalia.svg">
                                                                    Somalia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/south-africa.svg">
                                                                    South Africa</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/south-korea.svg">
                                                                    South
                                                                    Korea</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/south-sudan.svg">
                                                                    South
                                                                    Sudan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/spain.svg">
                                                                    Spain
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sri-lanka.svg">
                                                                    Sri
                                                                    Lanka</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sudan.svg">
                                                                    Sudan
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/suriname.svg">
                                                                    Suriname
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/swaziland.svg">
                                                                    Swaziland</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/sweden.svg">
                                                                    Sweden
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/switzerland.svg">
                                                                    Switzerland</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/syria.svg">
                                                                    Syrian Arab
                                                                    Republic</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/taiwan.svg">
                                                                    Taiwan,
                                                                    Province of China</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tajikistan.svg">
                                                                    Tajikistan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tanzania.svg">
                                                                    Tanzania, United Republic of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/thailand.svg">
                                                                    Thailand
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/togo.svg">
                                                                    Togo
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tokelau.svg">
                                                                    Tokelau
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tonga.svg">
                                                                    Tonga
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/trinidad-and-tobago.svg">
                                                                    Trinidad and
                                                                    Tobago</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tunisia.svg">
                                                                    Tunisia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/turkey.svg">
                                                                    Turkey
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/turkmenistan.svg">
                                                                    Turkmenistan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/turks-and-caicos.svg">
                                                                    Turks and Caicos Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/tuvalu.svg">
                                                                    Tuvalu
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/uganda.svg">
                                                                    Uganda
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/ukraine.svg">
                                                                    Ukraine
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/united-arab-emirates.svg">
                                                                    United Arab
                                                                    Emirates</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/united-kingdom.svg">
                                                                    United Kingdom</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/united-states.svg">
                                                                    United States</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/uruguay.svg">
                                                                    Uruguay
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/uzbekistan.svg">
                                                                    Uzbekistan</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/vanuatu.svg">
                                                                    Vanuatu
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/venezuela.svg">
                                                                    Venezuela, Bolivarian Republic of</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/vietnam.svg">
                                                                    Vietnam
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/virgin-islands.svg">
                                                                    Virgin Islands</option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/yemen.svg">
                                                                    Yemen
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/zambia.svg">
                                                                    Zambia
                                                                </option>
                                                                <option
                                                                    data-kt-select2-country="/assets/media/flags/zimbabwe.svg">
                                                                    Zimbabwe
                                                                </option>
                                                            </select>
                                                            @error('country')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-6">
                                                        <label
                                                            class="col-lg-4 col-form-label required fw-bold fs-6">Freelance</label>
                                                        <div class="col-lg-8 fv-row">
                                                            <input type="freelance" name="freelance"
                                                                class="form-control form-control-lg form-control-solid"
                                                                placeholder="freelance"
                                                                value="{{ $profile->freelance }}" />
                                                            @error('freelance')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    <div class="text-center pt-15">
                                                        <button type="submit" class="btn btn-primary"
                                                            id="kt_modal_add_user_form"
                                                            >
                                                            Save
                                                            Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body py-4">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-125px">User</th>
                                    <th class="min-w-125px">Age</th>
                                    <th class="min-w-125px">Company Name</th>
                                    <th class="min-w-125px">Website</th>
                                    <th class="min-w-125px">Phone</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin:: Avatar -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="#">
                                                <div class="symbol-label">
                                                    <img src="{{ asset('storage/' . $profile->avatar) }}"
                                                        alt="avatar" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::User details-->
                                        <div class="d-flex flex-column">
                                            <a href="../../demo1/dist/apps/user-management/users/view.html"
                                                class="text-gray-800 text-hover-primary mb-1">{{ $profile->first_name }}
                                                {{ $profile->last_name }}</a>
                                            <span>{{ $profile->email }}</span>
                                        </div>
                                        <!--begin::User details-->
                                    </td>
                                    <!--end::User=-->
                                    <!--begin::Role=-->
                                    <td>{{ $profile->age }}</td>
                                    <!--end::Role=-->
                                    <!--begin::Last login=-->
                                    <td>
                                        <div class="badge badge-light fw-bolder">{{ $profile->company_name }}</div>
                                    </td>
                                    <!--end::Last login=-->
                                    <!--begin::Two step=-->
                                    <td>
                                        <div class="badge badge-light fw-bolder">{{ $profile->website }}</div>
                                    </td>
                                    <!--end::Two step=-->
                                    <!--begin::Joined-->
                                    <td>{{ $profile->phone }}</td>
                                    <!--begin::Joined-->
                                    <!--begin::Action=-->
                                    <td class="text-end">

                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ $profile->id }}" class="menu-link px-3"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3"
                                                    data-kt-users-table-filter="delete_row">Delete</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->

                                        <!--end::Action=-->
                                </tr>
                                <!--end::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
