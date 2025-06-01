<div
    x-data="{
        metrics: $wire.$entangle('metrics'),
        refreshing: false,
        init() {
            // Alpine.js initialization
        }
    }"
    class="card h-lg-100"
>
    <div class="card-body d-flex align-items-center">
        <div class="w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="text-800 mb-0">
                    <template x-if="!metrics.error">
                        <span>
                            Using Storage <strong class="text-1100" x-text="metrics.used.formatted"></strong> of <span x-text="metrics.total.formatted"></span>
                        </span>
                    </template>
                    <template x-if="metrics.error">
                        <span class="text-danger">Storage Status Unavailable</span>
                    </template>
                </h6>
                <template x-if="!metrics.error">
                    <span
                        class="badge rounded-pill"
                        :class="{
                            'bg-success': metrics.used.percent < 70,
                            'bg-warning': metrics.used.percent >= 70 && metrics.used.percent < 90,
                            'bg-danger': metrics.used.percent >= 90
                        }"
                    >
                        <span x-text="metrics.used.percent"></span>%
                    </span>
                </template>
            </div>

            <template x-if="metrics.error">
                <div class="alert alert-danger py-2" x-text="metrics.error"></div>
            </template>

            <template x-if="!metrics.error">
                <div>
                    <div class="progress-stacked mb-3 rounded-3" style="height: 10px;">
                        <div
                            class="progress"
                            :style="'width: ' + metrics.categories.regular.percent + '%'"
                            role="progressbar"
                            :aria-valuenow="metrics.categories.regular.percent"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            <div class="progress-bar bg-progress-gradient border-end border-100 border-2"></div>
                        </div>
                        <div
                            class="progress"
                            :style="'width: ' + metrics.categories.system.percent + '%'"
                            role="progressbar"
                            :aria-valuenow="metrics.categories.system.percent"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            <div class="progress-bar bg-info border-end border-100 border-2"></div>
                        </div>
                        <div
                            class="progress"
                            :style="'width: ' + metrics.categories.shared.percent + '%'"
                            role="progressbar"
                            :aria-valuenow="metrics.categories.shared.percent"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            <div class="progress-bar bg-success border-end border-100 border-2"></div>
                        </div>
                        <div
                            class="progress"
                            :style="'width: ' + metrics.free.percent + '%'"
                            role="progressbar"
                            :aria-valuenow="metrics.free.percent"
                            aria-valuemin="0"
                            aria-valuemax="100"
                        >
                            <div class="progress-bar bg-200"></div>
                        </div>
                    </div>

                    <div class="row fs-10 fw-semi-bold text-500 g-0">
                        <div class="col-auto d-flex align-items-center pe-3">
                            <span class="dot bg-primary"></span>
                            <span>Regular</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">
                                (<span x-text="metrics.categories.regular.formatted"></span>)
                            </span>
                        </div>
                        <div class="col-auto d-flex align-items-center pe-3">
                            <span class="dot bg-info"></span>
                            <span>System</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">
                                (<span x-text="metrics.categories.system.formatted"></span>)
                            </span>
                        </div>
                        <div class="col-auto d-flex align-items-center pe-3">
                            <span class="dot bg-success"></span>
                            <span>Shared</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">
                                (<span x-text="metrics.categories.shared.formatted"></span>)
                            </span>
                        </div>
                        <div class="col-auto d-flex align-items-center">
                            <span class="dot bg-200"></span>
                            <span>Free</span>
                            <span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">
                                (<span x-text="metrics.free.formatted"></span>)
                            </span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <template x-if="!metrics.error">
        <div class="card-footer bg-body-tertiary py-2 text-end">
            <span class="fs-9 text-600">
                <span
                    class="me-1 fas fa-sync-alt"
                    :class="{ 'fa-spin': $wire.loading }"
                ></span>
                <button
                    wire:click="refresh"
                    wire:loading.attr="disabled"
                    class="btn btn-link btn-sm p-0 text-600"
                >
                    Refresh Now
                </button>
                <span class="mx-1">|</span>
                Auto-refreshes every {{ $refreshInterval }} seconds
            </span>
        </div>
    </template>

    <!-- Add real-time polling -->
    <div wire:poll.{{ $refreshInterval }}s="getStorageMetrics"></div>
</div>
