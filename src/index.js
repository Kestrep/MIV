const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, MediaUpload } = wp.editor; // Ne pas oublier de le signaler en php dans /inc/gutenberg.php
const { PanelBody, IconButton } = wp.components;

registerBlockType('namespace/donation-block', {

    // built-in attributes
    title: 'Donation Call To Action',
    description: 'Block qui génère un appel à donation dans un hero',
    icon: 'format-image',
    category: 'layout',

    // Custom attributes
    attributes: {
        hook: {
            type: 'string',
            source: 'html',
            selector: 'div'
        },
        buttonText: {
            type: 'string',
            source: 'html',
            selector: 'div'
        }
    },

    // Built-in functions
    edit({attributes, setAttributes}) {
        const {
            buttonText,
            hook
        } = attributes;
        // Custom functions
        function updateButtonText(newButtonText) {
            setAttributes({ buttonText: newButtonText });
        }

        function updateHook(newHook) {
            setAttributes({ hook: newHook });
        }
        
        return (
            <div class="cta-container">
                <RichText   key="editable" 
                            tagName="h2"
                            placeholder="Le texte au dessus du bouton"
                            value={ hook }
                            onChange={ updateHook }
                            />
                <RichText   key="editable" 
                            tagName="div"
                            placeholder="Le texte du bouton"
                            value={ buttonText }
                            onChange={ updateButtonText }
                            />
            </div>
        );
    },

    save({attributes}) {
        const {
            buttonText,
            hook
        } = attributes;

        return (
            <section class="hero hero-fullwidth hero-donation">
                <div class="text">{ hook }</div>
                <div class="donation-button big">{ buttonText }</div>
            </section>
        );
    }
});

registerBlockType('namespace/cta-block', { // 'namespace/block-slug'

    // built-in attributes
    title: 'Call to Action',
    description: 'Block to generate a custom Call to Action',
    icon: 'format-image',
    category: 'layout', // Category dans laquelle sera rangé notre block, lors de sa sélection dans l'interface Admin

    // Custom attributes
    attributes: {
        title: {
            type: 'string',
            source: 'html', // On veut permettre à l'utilisateur de rajouter de l'italique, du gras etc.
            selector: 'h2'
        },
        body: {
            type: 'string',
            source: 'html',
            selector: 'p' // Le sélecteur 'p' permet d'avoir plusieurs lignes
        },
        backgroundImage: {
            type: 'string', // URL
            default: null
        }
    },
    // Custom functions

    // built-in functions
    edit({ attributes, setAttributes }) { 
        const {
            title,
            body,
            backgroundImage,
        } = attributes;

        function onChangeTitle(newTitle) {
            setAttributes({ title: newTitle });
        }
        function onChangeBody(newBody) {
            setAttributes({ body: newBody });
        }
        function onSelectImage(newImage) {
            setAttributes({ backgroundImage: newImage.sizes.full.url });
        }

        return ([
            <InspectorControls style={{marginBottom: '40px'}}>
                <PanelBody title={ 'Background Image Settings' }>
                    <p><strong>Select a Background Image: </strong></p>
                    <MediaUpload
                        onSelect={ onSelectImage }
                        type="image"
                        value={ backgroundImage }
                        render={ ({ open }) => (
                            <IconButton
                                onClick={ open }
                                icon="upload"
                                className="editor-medi-placeholder__button is-button is-default is-large">
                                Background Image 
                            </IconButton>
                            )} 
                        />
                </PanelBody>
            </InspectorControls>,
            <div class="cta-container">
                <RichText   key="editable" 
                            tagName="h2"
                            placeholder="Your CTA title"
                            value={ title }
                            onChange={ onChangeTitle }
                            />
                <RichText   key="editable" 
                            tagName="p"
                            placeholder="Your CTA description"
                            value={ body }
                            onChange={ onChangeBody }
                            />
            </div>
        ]);
    },

    save({ attributes }) {
        const {
            title,
            body
        } = attributes;

        return (
            <div class="cta-container">
                <h2>{ title }</h2>
                <RichText.Content   tagName="p"
                                    value={ body }/>
            </div>
        );
    }
});
