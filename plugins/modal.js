function _createModal(options) {
    const modal = document.createElement('div')
    modal.classList.add('vmodal')
    modal.insertAdjacentHTML('afterbegin', `
            
            <div class="modal-overlay">
                <div class="modal-window">
                    <div class="modal-header">
                        <span class="modal-title">Modal title</span>
                        <span class="modal-close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="modal-footer">
                        <button>Ok</button>
                        <button>Cancel</button>
                    </div>
                </div>
            </div>
    `)
    document.body.appendChild(modal)
    return modal
}


$.modal = function (options) {
    const animSpeed = 200
    const $modal = _createModal(options)
    let closing = false
    return {
        open () {
            !closing && $modal.classList.add('open')

        },
        close () {
            closing = true
            $modal.classList.remove('open')
            $modal.classList.add('hide')
            setTimeout(() => {
                $modal.classList.remove('hide')
                closing = false
            }, animSpeed)

        },
        destroy () {}
    }
}