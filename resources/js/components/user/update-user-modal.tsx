import { useForm } from '@inertiajs/react';
import React, { FormEventHandler, useRef, useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';

import InputError from '@/components/input-error';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { toast } from 'sonner';

import {
    Dialog,
    DialogClose,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogTitle
} from '@/components/ui/dialog';
import { User } from '@/types';
import { PencilIcon } from 'lucide-react';

interface UpdateUserModalProps {
    user: User;
}

export default function UpdateUserModal({ user }: UpdateUserModalProps) {
    const { t } = useTranslation();
    const nameInput = useRef<HTMLInputElement>(null);

    const [open, setOpen] = useState(false);

    const { data, setData, put, processing, reset, errors, clearErrors } = useForm({
        name: user.name,
        phone: user.phone,
        email: user.email,
        password: user.password
    });

    useEffect(() => {
        setData({
            name: user.name,
            phone: user.phone,
            email: user.email,
            password: ''
        });
    }, [user, setData]);

    const submit: FormEventHandler = (e) => {
        e.preventDefault();

        put(`/user/${user.id}`, {
            preserveScroll: true,
            onSuccess: () => {
                reset();
                clearErrors();
                setOpen(false); // 🔒 CLOSE MODAL HERE
                toast.success(t('updated_successfully'));
            },
            onError: (err) => {
                nameInput.current?.focus();
                // Display a friendly error message if available
                const errorMessage = err?.error || t('create_failed'); // Use fallback error message
                toast.error(errorMessage); // Display error message
            }
        });

    };

    const handleUpdateClick = () => {
        setOpen(true); // Open the modal
    };

    return (

        <>
            <button
                onClick={() => handleUpdateClick()}
                className="bg-green-600 px-4 py-2 text-sm font-medium text-white-700 border border-gray-400 hover:text-black hover:bg-gray-100 focus:z-10 rounded-l-md"
            >
                <PencilIcon className="w-4 h-4" />
            </button>
            <Dialog open={open} onOpenChange={setOpen}>

                <DialogContent className="dark:border-gray-400">
                    <DialogDescription>
                        <DialogTitle>{t('modal.update_title')}</DialogTitle>
                        <DialogDescription>{t('modal.update_description')}</DialogDescription>
                    </DialogDescription>

                    <form onSubmit={submit} className="space-y-4">
                        <div>
                            <Label htmlFor="name">{t('name')}</Label>
                            <Input
                                id="name"
                                ref={nameInput}
                                value={data.name}
                                onChange={(e) => setData('name', e.target.value)}
                            />
                            <InputError message={errors.name} />
                        </div>

                        <div>
                            <Label htmlFor="phone">{t('phone')}</Label>
                            <Input
                                id="phone"
                                type={'number'}
                                value={data.phone}
                                onChange={(e) => setData('phone', e.target.value)}
                            />
                            <InputError message={errors.phone} />
                        </div>

                        <div>
                            <Label htmlFor="email">{t('email')}</Label>
                            <Input
                                id="email"
                                value={data.email}
                                onChange={(e) => setData('email', e.target.value)}
                            />
                            <InputError message={errors.email} />
                        </div>

                        <div>
                            <Label htmlFor="password">{t('password')}</Label>
                            <Input
                                id="password"
                                type="text"
                                onChange={(e) => setData('password', e.target.value)}
                            />
                            <InputError message={errors.password} />
                        </div>

                        <DialogFooter className="gap-2">
                            <DialogClose asChild>
                                <Button variant="secondary" onClick={() => {
                                    reset();
                                    clearErrors();
                                    setOpen(false);
                                }}>
                                    {t('cancel')}
                                </Button>
                            </DialogClose>

                            <Button type="submit" disabled={processing}>
                                {t('save')}
                            </Button>
                        </DialogFooter>
                    </form>
                </DialogContent>
            </Dialog>
        </>

    );
}
