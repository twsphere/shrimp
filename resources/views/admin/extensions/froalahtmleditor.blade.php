<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{ $label }}</label>

    <div class="{{$viewClass['field']}}">
        <textarea name="{{ $name }}" style="display: none;"></textarea>
        <div id="{{ $id }}">{!! $content !!}</div>
    </div>

    <script>
        var {{ $froala }};

        $(document).ready(function () {
            {{ $froala }} = new FroalaEditor("#{{ $id }}", {
                height: 300,
                language: 'zh_tw',
                toolbarButtons: {
                    'moreText': {
                        'buttons': [
                            'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass',
                        ],
                    },
                    'moreParagraph': {
                        'buttons': [
                            'alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight', 'outdent', 'indent', 'quote',
                        ],
                    },
                    'moreRich': {
                        'buttons': [
                            'insertLink', 'insertImage', 'insertVideo', 'insertTable', 'emoticons', 'fontAwesome', 'specialCharacters', 'embedly', 'insertHR', 'html',
                        ],
                    },
                    'moreMisc': {
                        'buttons': [
                            'undo', 'redo',
                        ],
                        'align': 'right',
                        'buttonsVisible': 2,
                    }
                },
                imageUploadParam: 'pic',
                imageUploadURL  : "{{ route('admin.upload', ['folder' => $folder]) }}",
                imageUploadParams: {
                    _token: '{{ csrf_token() }}',
                },
            });

            $('#{{ $id }}').closest('form').submit(function () {
                var htmlViewer = $('#{{ $id }} .fr-view');
                var htmlContent = htmlViewer.html();

                @if (!empty($autoThumbCover))
                    try {
                        var imgs = htmlContent.match(/<img [^>]+/);

                        if (imgs.length > 0) {
                            var firstImgURL = imgs[0].match(/src="[^"]+/)[0].replace('src="', '');
                            $('#{{ $id }}').closest('form').find(':hidden[name="thumb_image_url"]').val(firstImgURL);
                        }
                    }  catch (e) {
                        $('#{{ $id }}').closest('form').find(':hidden[name="thumb_image_url"]').val('');
                    }
                @endif

                $('#{{ $id }}').closest('form').find(':hidden[name="text_content"]').val(htmlViewer.text().trim().replace(/\s+/ig, ' '));
                $('#{{ $id }}').closest('form').find('textarea[name="{{ $name }}"]').val(htmlContent);

                delete htmlViewer, htmlContent;
            });
        });

        console.log('{{ $froala }}');
    </script>
</div>
