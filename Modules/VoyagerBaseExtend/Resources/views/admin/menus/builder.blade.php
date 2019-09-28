@extends('voyager::master')

@section('page_title', __('generic.menu_builder'))

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-list"></i>{{ __('generic.menu_builder') }} ({{ $menu->name }})
        <div class="btn btn-success add_item"><i class="voyager-plus"></i> {{ __('menu_builder.new_menu_item') }}</div>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('css')
    @parent

@endsection

@section('content')
    @include('voyager::menus.partial.notice')

    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <p class="panel-title" style="color:#777">{{ __('menu_builder.drag_drop_info') }}</p>
                    </div>

                    <div class="panel-body" style="padding:30px;">
                        <div class="dd">
                            {!! menu($menu->name, 'voyagerbaseextend::admin.menu.admin', 
                            ['isModelTranslatable' => $isModelTranslatable]) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('generic.close') }}"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('menu_builder.delete_item_question') }}</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.menus.item.destroy', ['menu' => $menu->id, 'id' => '__id']) }}"
                          id="delete_form"
                          method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('menu_builder.delete_item_confirm') }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal modal-info fade" tabindex="-1" id="menu_item_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('generic.close') }}"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 id="m_hd_add" class="modal-title hidden"><i class="voyager-plus"></i> {{ __('menu_builder.create_new_item') }}</h4>
                    <h4 id="m_hd_edit" class="modal-title hidden"><i class="voyager-edit"></i> {{ __('menu_builder.edit_item') }}</h4>
                </div>
                <form action="" id="m_form" method="POST"
                      data-action-add="{{ route('voyager.menus.item.add', ['menu' => $menu->id]) }}"
                      data-action-update="{{ route('voyager.menus.item.update', ['menu' => $menu->id]) }}">

                    <input id="m_form_method" type="hidden" name="_method" value="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        @include('voyager::multilingual.language-selector')
                        @if($menu->name != 'admin')
                        <div id="m_active_item">
                            <ul class="radio radio-menu-active-item">
                                <li>
                                    <input type="radio" id="active_item_on" name="active_item" value="1">
                                    <label for="active_item_on">ON</label>
                                    <div class="check"></div>
                                </li>
                                <li>
                                    <input type="radio" id="active_item_off" name="active_item" value="0">
                                    <label for="active_item_off">OFF</label>
                                    <div class="check"></div>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <label for="name">{{ __('menu_builder.item_title') }}</label>
                        @include('voyager::multilingual.input-hidden', ['_field_name' => 'title', '_field_trans' => ''])
                        <input type="text" class="form-control" id="m_title" name="title" placeholder="{{ __('generic.title') }}"><br>
                        <label for="type">{{ __('menu_builder.link_type') }}</label>
                        <select id="m_link_type" class="form-control" name="type">
                            <option value="url" selected="selected">{{ __('menu_builder.static_url') }}</option>
                            <option value="route">{{ __('menu_builder.dynamic_route') }}</option>
                        </select><br>
                        <div id="m_url_type">
                            <label for="url">{{ __('menu_builder.url') }}</label>
                            <input type="text" class="form-control" id="m_url" name="url" placeholder="{{ __('generic.url') }}"><br>
                        </div>
                        <div id="m_route_type">
                            <label for="route">{{ __('menu_builder.item_route') }}</label>
                            <input type="text" class="form-control" id="m_route" name="route" placeholder="{{ __('generic.route') }}"><br>
                            <label for="parameters">{{ __('menu_builder.route_parameter') }}</label>
                            <textarea rows="3" class="form-control" id="m_parameters" name="parameters" placeholder="{{ json_encode(['key' => 'value'], JSON_PRETTY_PRINT) }}"></textarea><br>
                        </div>

                        {{-- Add new tab link to module --}}
                        <label for="link_to_module">{{ __('menu_builder.choice_module') }}</label>
                        <select id="m_link_to_module" class="form-control" name="link_to_module">
                            <option value=""> -- {{ __('menu_builder.no_choice_module') }} --</option>
                            @foreach($modules as $module)
                            <option value="{{ $module->name }}" 
                            @if( $module->name == $menu->link_to_module ) 
                            selected="selected" @endif > Module -- {{ $module->name }} --
                            </option>
                            @endforeach
                        </select><br>
                        {{-- end --}}

                        <label for="icon_class">{{ __('menu_builder.icon_class') }} <a
                                    href="{{ route('voyager.compass.index', [], false) }}#fonts"
                                    target="_blank">{!! __('menu_builder.icon_class2') !!}</label>
                        <input type="text" class="form-control" id="m_icon_class" name="icon_class"
                               placeholder="{{ __('menu_builder.icon_class_ph') }}"><br>
                        <label for="color">{{ __('menu_builder.color') }}</label>
                        <input type="color" class="form-control" id="m_color" name="color"
                               placeholder="{{ __('menu_builder.color_ph') }}"><br> 
                        <label for="target">{{ __('menu_builder.open_in') }}</label>
                        <select id="m_target" class="form-control" name="target">
                            <option value="_self" selected="selected">{{ __('menu_builder.open_same') }}</option>
                            <option value="_blank">{{ __('menu_builder.open_new') }}</option>
                        </select>
                        <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                        <input type="hidden" name="id" id="m_id" value="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success pull-right delete-confirm__" value="{{ __('generic.update') }}">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('generic.cancel') }}</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




@stop

@section('javascript')

    <script>
        $(document).ready(function () {
            @if ($isModelTranslatable)
                /**
                 * Multilingual setup for main page
                 */
                $('.side-body').multilingual({
                    "transInputs": '.dd-list input[data-i18n=true]'
                });

                /**
                 * Multilingual for Add/Edit Menu
                 */
                $('#menu_item_modal').multilingual({
                    "form":          'form',
                    "transInputs":   '#menu_item_modal input[data-i18n=true]',
                    "langSelectors": '.language-selector input',
                    "editing":       true
                });
            @endif


            $('.dd').nestable({
                expandBtnHTML: '',
                collapseBtnHTML: ''
            });


            /**
             * Set Variables
             */
            var $m_modal            = $('#menu_item_modal'),
                $m_hd_add           = $('#m_hd_add').hide().removeClass('hidden'),
                $m_hd_edit          = $('#m_hd_edit').hide().removeClass('hidden'),
                $m_form             = $('#m_form'),
                $m_form_method      = $('#m_form_method'),
                $m_title            = $('#m_title'),
                $m_title_i18n       = $('#title_i18n'),
                $m_url_type         = $('#m_url_type'),
                $m_url              = $('#m_url'),
                $m_link_type        = $('#m_link_type'),
                $m_route_type       = $('#m_route_type'),
                $m_route            = $('#m_route'),
                $m_parameters       = $('#m_parameters'),
                $m_icon_class       = $('#m_icon_class'),
                $m_color            = $('#m_color'),
                $m_target           = $('#m_target'),
                $m_link_to_module   = $('#m_link_to_module'),
                $m_active_item      = $('#m_active_item'),
                $m_id               = $('#m_id');

            /**
             * Add Menu
             */
            $('.add_item').click(function() {
                $m_form.trigger('reset');
                $m_form.find("input[type=submit]").val('{{ __('generic.add') }}');
                $m_modal.modal('show', {data: null});
            });

            /**
             * Edit Menu
             */
            $('.item_actions').on('click', '.edit', function (e) {
                $m_form.find("input[type=submit]").val('{{ __('generic.update') }}');
                $m_modal.modal('show', {data: $(e.currentTarget)});
            });

            /**
             * Change active item Menu
             */
             $('.item_actions').on('click', '.active-item-ajax', function (e) {
                $.post({
                    url: "/admin/voyagerbaseextend/ajax/updateactiveitem", 
                    data:{
                        id: $(this).data('id'),
                        active: $(this).data('active_item'),
                    },
                    success: function(data){
                        window.location.href = data;
                        toastr.success("{{ __('menu_builder.active_item_change') }}");
                    },
                    error: function(err) {
                        console.log('error ' + err)
                    }
                });
            });

            /**
             * Menu Modal is Open
             */
            $m_modal.on('show.bs.modal', function(e, data) {
                var _adding      = e.relatedTarget.data ? false : true,
                    translatable = $m_modal.data('multilingual'),
                    $_str_i18n   = '';

                if (_adding) {
                    $m_form.attr('action', $m_form.data('action-add'));
                    $m_form_method.val('POST');
                    $m_hd_add.show();
                    $m_hd_edit.hide();
                    $m_target.val('_self').change();
                    $m_link_to_module.val('').change();
                    $m_active_item.val('').change();
                    $m_link_type.val('url').change();
                    $m_url.val('');
                    $m_icon_class.val('');

                } else {
                    $m_form.attr('action', $m_form.data('action-update'));
                    $m_form_method.val('PUT');
                    $m_hd_add.hide();
                    $m_hd_edit.show();

                    var _src = e.relatedTarget.data, // the source
                        id   = _src.data('id');

                    $m_title.val(_src.data('title'));
                    $m_url.val(_src.data('url'));
                    $m_route.val(_src.data('route'));
                    $m_parameters.val(JSON.stringify(_src.data('parameters')));
                    $m_icon_class.val(_src.data('icon_class'));
                    $m_color.val(_src.data('color'));
                    $m_id.val(id);

                    if(translatable){
                        $_str_i18n = $("#title" + id + "_i18n").val();
                    } 

                    @foreach ($modules as $module)
                    if (_src.data('link_to_module') == '{{ $module->name }}') {
                        $m_link_to_module.find("option[value='{{ $module->name }}']").attr('selected', 'selected');
                    }    
                    @endforeach
                    
                    if (_src.data('active_item') == 1 ) {
                        $("#active_item_on").prop("checked", true);
                    } else {
                        $("#active_item_off").prop("checked", true);
                    }

                    if (_src.data('target') == '_self') {
                        $m_target.val('_self').change();
                    } else if (_src.data('target') == '_blank') {
                        $m_target.find("option[value='_self']").removeAttr('selected');
                        $m_target.find("option[value='_blank']").attr('selected', 'selected');
                        $m_target.val('_blank');
                    }
                    if (_src.data('route') != "") {
                        $m_link_type.val('route').change();
                        $m_url_type.hide();
                    } else {
                        $m_link_type.val('url').change();
                        $m_route_type.hide();
                    }
                    if ($m_link_type.val() == 'route') {
                        $m_url_type.hide();
                        $m_route_type.show();
                    } else {
                        $m_route_type.hide();
                        $m_url_type.show();
                    }
                }

                if (translatable) {
                    $m_title_i18n.val($_str_i18n);
                    translatable.refresh();
                }
            });


            /**
             * Toggle Form Menu Type
             */
            $m_link_type.on('change', function (e) {
                if ($m_link_type.val() == 'route') {
                    $m_url_type.hide();
                    $m_route_type.show();
                } else {
                    $m_url_type.show();
                    $m_route_type.hide();
                }
            });


            /**
             * Delete menu item
             */
            $('.item_actions').on('click', '.delete', function (e) {
                id = $(e.currentTarget).data('id');
                $('#delete_form')[0].action = '{{ route('voyager.menus.item.destroy', ['menu' => $menu->id, 'id' => '']) }}/' + id;
                $('#delete_modal').modal('show');
            });


            /**
             * Reorder items
             */
            $('.dd').on('change', function (e) {
                $.post('{{ route('voyager.menus.order',['menu' => $menu->id]) }}', {
                    order: JSON.stringify($('.dd').nestable('serialize')),
                    _token: '{{ csrf_token() }}'
                }, function (data) {
                    toastr.success("{{ __('menu_builder.updated_order') }}");
                });
            });

        });
    </script>
@stop